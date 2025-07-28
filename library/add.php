<?php
include 'db.php';

$message = '';
$message_type = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];

    if ($title && $author && $isbn) {
        $stmt = $conn->prepare("INSERT INTO books (title, author, isbn, published_year, genre) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis", $title, $author, $isbn, $published_year, $genre);
        if ($stmt->execute()) {
            header("Location: index.php");
            exit(); // Always exit after a header redirect
        } else {
            $message = "Error adding book: " . $conn->error;
            $message_type = 'error';
        }
    } else {
        $message = "Please fill all required fields (Title, Author, ISBN).";
        $message_type = 'error';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Add New Book</h2>
    <?php if ($message): ?>
        <div class="message <?= $message_type; ?>">
            <?= $message; ?>
        </div>
    <?php endif; ?>
    <form method="POST">
        <input type="text" name="title" placeholder="Enter book title" required>
        <input type="text" name="author" placeholder="Enter author name" required>
        <input type="text" name="isbn" placeholder="Enter ISBN (e.g., 978-0321765723)" required>
        <input type="number" name="published_year" placeholder="Enter published year">
        <input type="text" name="genre" placeholder="Enter genre (e.g., Fiction, Sci-Fi)">
        <input type="submit" value="Add Book">
    </form>
</div>
</body>
</html>