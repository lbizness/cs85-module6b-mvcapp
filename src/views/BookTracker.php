<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Book Tracker</title>
</head>
<body>
<h1>WELCOME TO THE BOOK TRACKER!</h1>

<table border ="1">
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

</body>