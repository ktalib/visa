<?php include 'header.php'; ?>

<h2>All Documents</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Username</th>
            <th>File</th>
            <th>Caption</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query("SELECT * FROM documents");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . sanitize($row['id']) . "</td>";
            echo "<td>" . sanitize($row['user_id']) . "</td>";
            echo "<td>" . sanitize($row['username']) . "</td>";
            echo "<td><a href='../migrate/" . sanitize($row['file']) . "'>" . 'Download file'. "</a> </td>";
            echo "<td>" . sanitize($row['caption']) . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>