<?php
include("db.php");

$search = isset($_GET['q']) ? mysqli_real_escape_string($conn, $_GET['q']) : '';

$sql = "SELECT * FROM books WHERE title LIKE '%$search%' OR author LIKE '%$search%' ORDER BY book_id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<table class="table table-bordered table-hover align-middle">
            <thead>
              <tr class="text-center">
                <th>ID</th>
                <th>Cover</th>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Publisher</th>
                <th>Category ID</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='text-center'>
                <td>{$row['book_id']}</td>
                <td><img src='Image/{$row['cover_page_path']}' class='book-cover'></td>
                <td>{$row['title']}</td>
                <td>{$row['author']}</td>
                <td>₹{$row['price']}</td>
                <td>{$row['quantity']}</td>
                <td>{$row['publisher']}</td>
                <td>{$row['category_id']}</td>
                <td>
                  <a href='edit_book.php?id={$row['book_id']}' class='btn btn-sm btn-warning'><i class='bi bi-pencil-square'></i></a>
                  <a href='?delete={$row['book_id']}' class='btn btn-sm btn-danger' onclick=\"return confirm('Are you sure?');\"><i class='bi bi-trash'></i></a>
                </td>
              </tr>";
    }

    echo '</tbody></table>';
} else {
    echo "<p class='text-center mt-3'>No books found.</p>";
}
?>
