<?php
session_start();
if(isset($_SESSION['username'])){?>
    <?php require_once "template/header.php"?>
<div class="container-fluid" style="padding-left:0 ">
   <?php require_once "template/nav.php"?>

    <!-- Main Wrapper -->
    <div class="p-1 my-container active-cont">
        <!-- Top Nav -->
        <nav class="navbar top-navbar navbar-light bg-light px-5">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
        </nav>
        <!--End Top Nav -->
        <!-- Add New Product-->
        <div class="row p-5">
            <?php require_once "addProduct.php";?>
        </div>
        <div class="row p-5" id="allProducts">
            <?php require_once "allProducts.php";?>

        </div>
    </div>
</div>
<?php require_once "template/footer.php"?>
<?php
}else{
    header("Location: login.php");
}
