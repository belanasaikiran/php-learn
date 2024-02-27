<!DOCTYPE html>
<html>

<head>
    <title>Functions and Filters</title>
</head>

<body>
    <?php foreach ($filteredBooks as $book): ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name']; ?> (
                <?= $book['release_year'] ?>) - By
                <?= $book['author'] ?>
            </a>
        </li>
    <?php endforeach; ?>


</body>

</html>