<?php require_once "template/header.php";?>
<div class="container">
    <!-- Start NavBar Section-->
    <div class="row">
        <?php require_once "template/nav.php";?>
    </div>
    <!-- End NavBar Section-->

    <!-- Start Site Heading-->

    <div class="row text-center">
        <h1 class="display-1">Welcome In Market Store</h1>
    </div>
    <hr>
    <!-- End Site Heading-->

    <!-- Start Products Card-->
    <div class="row">
        <div class="card-group">
            <?php
            require_once"connection.php";
            require_once "Product.php";
            $select=$connection->prepare('SELECT * FROM products');
            $select->execute();
            $products=$select->fetchAll(PDO::FETCH_CLASS,'Product');
            foreach ($products as $product){?>
                <div class="card">
                    <img src="admin/images/<?= $product->product_image?>" class="card-img-top" alt="..." width="270px" height="270px">
                    <div class="card-body">
                        <h5 class="card-title"><?=$product->product_name?></h5>
                        <p class="card-text"><?=$product->expiry_date?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
    <!-- End Products Card-->
</div>
<?php require_once "template/footer.php";?>



