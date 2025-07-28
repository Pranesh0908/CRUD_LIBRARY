<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM books WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];

    $stmt = $conn->prepare("UPDATE books SET title=?, author=?, isbn=?, published_year=?, genre=? WHERE id=?");
    $stmt->bind_param("sssisi", $title, $author, $isbn, $published_year, $genre, $id);
    $stmt->execute();
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Edit Book</h2>
    <form method="POST">
        <input type="text" name="title" value="<?= htmlspecialchars($row['title']) ?>" placeholder="Enter book title" required>
        <input type="text" name="author" value="<?= htmlspecialchars($row['author']) ?>" placeholder="Enter author name" required>
        <input type="text" name="isbn" value="<?= htmlspecialchars($row['isbn']) ?>" placeholder="Enter ISBN" required>
        <input type="number" name="published_year" value="<?= htmlspecialchars($row['published_year']) ?>" placeholder="Enter published year">
        <input type="text" name="genre" value="<?= htmlspecialchars($row['genre']) ?>" placeholder="Enter genre">
        <input type="submit" value="Update Book">
    </form>
</div>
</body>
</html>