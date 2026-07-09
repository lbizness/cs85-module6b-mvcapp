<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Book Tracker</title>
</head>
<body>
<h1>WELCOME TO THE BOOK TRACKER!</h1>

    <?php
        /** @var array $books */
        ?>

<table border ="1" cellpadding ="5" cellspacing="0">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?php echo htmlspecialchars($book['title']); ?></td>
                <td><?php echo htmlspecialchars($book['author']); ?></td>
                <td><?php echo htmlspecialchars($book['status']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>

<h2>Add a Book</h2>

<form method="POST">
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Author:</label><br>
    <input type="text" name="author" required><br><br>

    <label>Status:</label><br>
    <select name="status" required>
        <option value="Completed">Read</option>
        <option value="Want to Read">Want to Read</option>
    </select><br><br>

    <button type="submit">Add Book</button><br><br>
</form>


</body>