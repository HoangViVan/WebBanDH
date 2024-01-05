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
    <?php
        $pro=new product();
        $result=$pro->getProductById($_GET['id']);
        $set=$result->fetch();
        $producer=$set['p_producer'];
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
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="<?php echo '../img/product/'.$set['p_image']?>" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="<?php echo '../img/product/'.$set['p_image']?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="<?php echo '../img/product/1-'.$set['p_image']?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="<?php echo '../img/product/2-'.$set['p_image']?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="<?php echo '../img/product/3-'.$set['p_image']?>" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6><a href="index.php">Home</a> / <?php echo $set['p_producer']?></h6>
            <h4><?php echo $set['p_name']?></h4>
            <h2><?php echo number_format($set['p_price'],0,',','.')?> VNĐ</h2>
            <select name="" id="">
                <option value="">Chọn size</option>
                <option value="">XL</option>
                <option value="">XXL</option>
                <option value="">Small</option>
                <option value="">Large</option>
            </select>
            <input type="number" value="1">           
            <form action="add_cart.php" method="post">
            <input type="hidden" name="action" value="add_cart"/>
            <input type="hidden" name="productkey" value="<?php echo $set['p_id']?>"/>
            <input type="hidden" name="itemqty" value="1"/>
            <button type="submit" name="add_cart_sproduct" class="normal">Add To Cart</button>
            </form>
            <h4>Chi tiết sản phẩm</h4>
            <span><?php echo $set['p_informations']?></span>
            <h4>Thông số kĩ thuật</h4>
            <span><?php echo $set['p_specifications']?></span>

        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Sản phẩm liên quan</h2>
        <p>Bộ sưu tập thiết kế mới của <?php echo $producer?></p>
        <div class="pro-container">
            <?php
            $pros=new product();
            $results=$pros->getProductByProducer($producer);
            $j=1;
            while($sets=$results->fetch($j)):
            ?>      
            <form action="add_cart.php" method="post">
            <input type="hidden" name="action" value="add_cart"/>
            <input type="hidden" name="productkey" value="<?php echo $sets['p_id']?>"/>
            <input type="hidden" name="itemqty" value="1"/>
            <div class="pro" onclick="window.location.href='sproduct.php?id=<?php echo $sets['p_id']?>';">
                <img src="<?php echo '../img/product/'.$sets['p_image']?>" alt="">
                <div class="des">
                    <span><?php echo $sets['p_producer']?></span>
                    <h5><?php echo $sets['p_name']?></h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4><?php echo number_format($sets['p_price'],0,',','.').' VNĐ'?></h4>
                </div>
                <button type="submit" name="add_cart_sproduct" class="cart"><i class='bx bx-cart-alt' ></i></button>
            </div>
        </form>
            <?php
                endwhile;
            ?>
        </div>
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