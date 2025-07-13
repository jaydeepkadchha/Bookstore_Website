<?php
        include("db.php");
        $category_query = "SELECT category_id FROM category WHERE category_name = 'Children'";
        $category_result = mysqli_query($conn, $category_query);

        if ($category_result && mysqli_num_rows($category_result) > 0) {
          $category_row = mysqli_fetch_assoc($category_result);
          $category_id = $category_row['category_id'];

          $book_query = "SELECT * FROM books WHERE category_id = $category_id";
          $book_result = mysqli_query($conn, $book_query);

          if (mysqli_num_rows($book_result) > 0) {
            while ($book = mysqli_fetch_assoc($book_result)) {
              echo '
                <div class="col-md-4 mb-4">
                  <div class="card h-100 shadow-sm">
                    <img src="Image/' . $book['cover_page_path'] . '" class="card-img-top" alt="' . $book['title'] . '" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                      <h5 class="card-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">' . $book['title'] . '</h5>
                      <p class="card-text small">Author: ' . $book['author'] . '</p>
                      <p class="card-text small">Price: ₹' . $book['price'] . '</p>
                      <p class="card-text small">Available: ' . $book['quantity'] . '</p>

                      <form action="payment.php" method="post">
                        <input type="hidden" name="book_id" value="' . $book['book_id'] . '">
                        <input type="number" name="qty" min="1" max="' . $book['quantity'] . '" class="form-control mb-2" required>
                        <div class="d-flex justify-content-between">
                          <a href="cart.php?id=' . $book['book_id'] . '" class="btn btn-primary btn-sm">Add to Cart</a>
                          <button type="submit" class="btn btn-success btn-sm">Buy Now</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              ';
            }
          } else {
            echo '<p class="text-center">No books found in this category.</p>';
          }
        } else {
          echo '<p class="text-center">Category not found.</p>';
        }
        ?>