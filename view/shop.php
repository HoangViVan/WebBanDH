<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
        include "header.php";
        include "../controller/controller.php";
    ?>
    <section id="header">
        <a href="#"><img src="../img/logo.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li id="lg-bag"><a href="cart.php"><i class='bx bx-shopping-bag'></i></a></li>
                <a href="#" id="close"><i class='bx bx-x' ></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class='bx bx-shopping-bag'></i></a>
            <i class='bx bx-log-out' id="bar"></i>
        </div>
    </section>
    <section id="page-header">
        <h2>#stayhome</h2>
        <p>Save more with cupons & up to 70% off!</p>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
        <?php
        $pro = new product();
        $result=$pro->getList();
        $j=1;
        while($set=$result->fetch($j)):
        ?>      
        <form action="add_cart.php" method="post">
            <input type="hidden" name="action" value="add_cart"/>
            <input type="hidden" name="productkey" value="<?php echo $set['p_id']?>"/>
            <input type="hidden" name="itemqty" value="1"/>
            <div class="pro" onclick="window.location.href='sproduct.php?id=<?php echo $set['p_id']?>';">
                <img src="<?php echo '../img/product/'.$set['p_image']?>" alt="">
                <div class="des">
                    <span><?php echo $set['p_producer']?></span>
                    <h5><?php echo $set['p_name']?></h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4><?php echo number_format($set['p_price'],0,',','.').' VNĐ'?></h4>
                </div>
                <button type="submit" name="add_cart_shop" class="cart"><i class='bx bx-cart-alt' ></i></button>
            </div>
        </form>
        <?php
            endwhile;
        ?>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class='bx bx-right-arrow-alt'></i></a>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offer.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <?php include "footer.php"; ?>

</body>
</html>