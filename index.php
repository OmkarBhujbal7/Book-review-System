<?php


// Include header
include "head.php";
?>

<!-- Main Content -->
<section id="featured-books" class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header text-center mb-4">
                    <div class="title">
                        <span>Some quality items</span>
                    </div>
                    <h2 class="section-title">Featured Books</h2>
                </div>

                <div class="product-list">
                    <div class="row">
                        <?php
                        $query = "SELECT * FROM tbl_book 
                                  INNER JOIN book_category 
                                  ON book_category.category_id = tbl_book.book_category";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="col-md-3 d-flex align-items-stretch">
                                <div class="product-item text-center p-3 border rounded shadow-sm d-flex flex-column">
                                    <figure class="product-style">
                                        <img src="http://localhost/bookpanel/uploads/book/<?php echo $row['book_logo']; ?>" 
                                             alt="<?php echo $row['book_title']; ?>" class="img-fluid mb-3">
                                    </figure>
                                    <figcaption class="flex-grow-1">
                                        <h4 class="mb-1"><?php echo $row["book_title"]; ?></h4>
                                        <span class="text-muted d-block mb-2"><?php echo $row["book_author"]; ?></span>
                                    </figcaption>
                                    <a href="review.php?book_id=<?php echo $row['book_id']; ?>" class="mt-auto">
                                        <button type="button" class="btn btn-primary w-100">VIEW</button>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Quote of the Day -->
<section id="quotation" class="align-center pb-5 mb-5">
    <div class="inner-content">
        <h2 class="section-title divider">Quote of the day</h2>
        <blockquote>
            <q>“A room without books is like a body without a Soul.”</q>
            <div class="author-name">Marcus Cicero</div>
        </blockquote>
    </div>
</section>

<!-- JS Scripts -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

</body>
</html>
