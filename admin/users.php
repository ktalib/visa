<?php include 'header.php'; ?>

<h2>All Users</h2>
<div class="table-responsive">
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Country</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query("SELECT id, username, email, first_name, last_name, country FROM users");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . sanitize($row['id']) . "</td>";
            echo "<td>" . sanitize($row['username']) . "</td>";
            echo "<td>" . sanitize($row['email']) . "</td>";
            echo "<td>" . sanitize($row['first_name']) . "</td>";
            echo "<td>" . sanitize($row['last_name']) . "</td>";
            echo "<td>" . sanitize($row['country']) . "</td>";
            echo "<td><button class='btn btn-sm btn-info' onclick='viewUser(" . $row['id'] . ")'>View</button></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
    </div>
<!-- User Details Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">User Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="userModalBody">
                <!-- User details will be loaded here -->
            </div>
        </div>
    </div>
</div>
 
 

<script>
function viewUser(userId) {
    fetch('get_user_details.php?id=' + userId)
        .then(response => response.text())
        .then(text => {
            try {
                return JSON.parse(text);
            } catch (e) {
                console.error('Error parsing JSON:', text);
                throw new Error('Invalid JSON response from server');
            }
        })
        .then(data => {
            if (data.error) {
                throw new Error(data.error);
            }
            if (data.php_errors) {
                console.error('PHP Errors:', data.php_errors);
                throw new Error('PHP errors occurred. Check console for details.');
            }
            let modalBody = document.getElementById('userModalBody');
            let html = '<table class="table">';
            for (let key in data) {
                if (key !== 'php_errors') {
                    html += `<tr><th>${key}</th><td>${data[key]}</td></tr>`;
                }
            }
            html += '</table>';
            modalBody.innerHTML = html;
            
            let modal = new bootstrap.Modal(document.getElementById('userModal'));
            modal.show();
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while fetching user data: ' + error.message);
        });
}
</script>

<?php include 'footer.php'; ?>