<?php include 'header.php'; ?>

<?php
// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        $user_id = sanitize($_POST['user_id']);
        $name = sanitize($_POST['name']);
        $percent = sanitize($_POST['percent']);
        
        if ($_POST['action'] == 'add') {
            $stmt = $conn->prepare("INSERT INTO progress (user_id, name, percent) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $user_id, $name, $percent);
        } elseif ($_POST['action'] == 'update') {
            $id = sanitize($_POST['id']);
            $stmt = $conn->prepare("UPDATE progress SET user_id = ?, name = ?, percent = ? WHERE id = ?");
            $stmt->bind_param("sssi", $user_id, $name, $percent, $id);
        }
        
        $stmt->execute();
        $stmt->close();
    }
}
?>

<h2>All Progress</h2>
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#progressModal" onclick="resetForm()">
    Add Progress
</button>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Percent</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query("SELECT p.*, u.username FROM progress p JOIN users u ON p.user_id = u.id");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . sanitize($row['id']) . "</td>";
            echo "<td>" . sanitize($row['user_id']) . " (" . sanitize($row['username']) . ")</td>";
            echo "<td>" . sanitize($row['name']) . "</td>";
            echo "<td>" . sanitize($row['percent']) . "</td>";
            echo "<td><button class='btn btn-sm btn-primary' onclick='editProgress(" . json_encode($row) . ")'>Edit</button></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<!-- Progress Modal -->
<div class="modal fade" id="progressModal" tabindex="-1" aria-labelledby="progressModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="progressModalLabel">Add/Edit Progress</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="progressForm" method="POST">
                    <input type="hidden" id="action" name="action" value="add">
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User</label>
                        <select class="form-select" id="user_id" name="user_id" required>
                            <?php
                            $users = $conn->query("SELECT id, username FROM users");
                            while ($user = $users->fetch_assoc()) {
                                echo "<option value='" . sanitize($user['id']) . "'>" . sanitize($user['username']) . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="percent" class="form-label">Percent</label>
                        <input type="number" class="form-control" id="percent" name="percent" min="0" max="100" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function resetForm() {
    document.getElementById('progressForm').reset();
    document.getElementById('action').value = 'add';
    document.getElementById('progressModalLabel').textContent = 'Add Progress';
}

function editProgress(progress) {
    document.getElementById('action').value = 'update';
    document.getElementById('id').value = progress.id;
    document.getElementById('user_id').value = progress.user_id;
    document.getElementById('name').value = progress.name;
    document.getElementById('percent').value = progress.percent;
    document.getElementById('progressModalLabel').textContent = 'Edit Progress';
    var modal = new bootstrap.Modal(document.getElementById('progressModal'));
    modal.show();
}
</script>

<?php include 'footer.php'; ?>