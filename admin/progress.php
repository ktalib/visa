<?php include 'header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = sanitize($_POST['user_id']);
    $name = sanitize($_POST['name']);
    $percent = sanitize($_POST['percent']);
    
    $stmt = $conn->prepare("INSERT INTO progress (user_id, name, percent) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user_id, $name, $percent);
    $stmt->execute();
    $stmt->close();
}
?>

<h2>All Progress</h2>
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addProgressModal">
    Add Progress
</button>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Percent</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query("SELECT * FROM progress");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . sanitize($row['id']) . "</td>";
            echo "<td>" . sanitize($row['user_id']) . "</td>";
            echo "<td>" . sanitize($row['name']) . "</td>";
            echo "<td>" . sanitize($row['percent']) . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<!-- Add Progress Modal -->
<div class="modal fade" id="addProgressModal" tabindex="-1" aria-labelledby="addProgressModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProgressModalLabel">Add Progress</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
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

<?php include 'footer.php'; ?>