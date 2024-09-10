<?php include 'header.php'; ?>

<h2>All Users</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Country</th>
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
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>