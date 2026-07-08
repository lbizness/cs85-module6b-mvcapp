<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Book Tracker</title>
</head>
<body>
<h1>WELCOME TO THE BOOK TRACKER!</h1>

<h2>Book collection:</h2>


<form method="POST" action="index.php?action=store">

    <input name="title" placeholder="Book title">

    <input name="author" placeholder="Author">

    <select name="status">
        <option>To Read</option>
        <option>Reading</option>
        <option>Finished</option>
    </select>

    <button>Add Book</button>

</form>

<?php foreach ($books as $book): ?>

<p>
    <b><?= htmlspecialchars($book["title"]) ?></b><br>
    <?= htmlspecialchars($book["author"]) ?><br>
    Status: <?= htmlspecialchars($book["status"]) ?>
</p>

<?php endforeach; ?>
</body>