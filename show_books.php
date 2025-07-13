<?php
$json = file_get_contents('books.json');
$books = json_decode($json, true);
?>

<!DOCTYPE html>
<html>
<head><title>Book List from JSON</title></head>
<body>
  <h2>Books from JSON</h2>
  <ul>
    <?php foreach ($books as $book): ?>
      <li>
        <?= $book['title'] ?> - <?= $book['author'] ?> - ₹<?= $book['price'] ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
