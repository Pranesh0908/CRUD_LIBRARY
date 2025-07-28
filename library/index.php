<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Library Books</h2>
    <a href="add.php" class="action-link">➕ Add New Book</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Published Year</th>
            <th>Genre</th>
            <th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM books");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['author']}</td>
                    <td>{$row['isbn']}</td>
                    <td>{$row['published_year']}</td>
                    <td>{$row['genre']}</td>
                    <td class='table-actions'>
                        <a href='edit.php?id={$row['id']}'>Edit</a> |
                        <a href='delete.php?id={$row['id']}' class='delete-link' onclick='return confirm(\"Delete this book?\")'>Delete</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>