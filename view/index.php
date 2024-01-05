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
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
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
    <section id="hero">
        <!-- <h4>Đồng hồ chính hãng</h4> -->
        <h2>Đẳng cấp tạo nên thương hiệu</h2>
        <h1>Cara</h1>
        <p>Since 1990</p>
        <button>Shop now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="../img/feature/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="../img/feature/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="../img/feature/f3.png" alt="">
            <h6>Save money</h6>
        </div>
        <div class="fe-box">
            <img src="../img/feature/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="../img/feature/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="../img/feature/f6.png" alt="">
            <h6>f24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Sản phẩm nổi bật</h2>
        <p>Bộ sưu tập thiết kế mới</p>
        <div class="pro-container">
        <?php
        $pro = new product();
        $result=$pro->getList1();
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
                <button type="submit" name="add_cart" class="cart"><i class='bx bx-cart-alt' ></i></button>
            </div>
        </form>
        <?php
            endwhile;
        ?>
    </section>

    <section id="banner" class="section-m1">
        <h4>Chính sách bảo hành sản phẩm</h4>
        <h2>Cam kết <span>1 đổi 1</span> nếu sản phẩm lỗi</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>Sản phẩm mới nhất</h2>
        <p>Thiết kế sang trọng - Mẫu mã đa dạng</p>
        <div class="pro-container">
        <?php
        $pro = new product();
        $result=$pro->getList2();
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
                <button type="submit" name="add_cart" class="cart"><i class='bx bx-cart-alt' ></i></button>
            </div>
        </form>
        <?php
            endwhile;
        ?>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Chương trình khuyến mãi</h4>
            <h2>Giảm 30% đơn hàng đầu tiên</h2>
            <span>Freeship toàn quốc</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Phong cách / Thời thượng</h4>
            <h2>Sản phẩm cập nhật liên tục</h2>
            <span>Mang đậm dấu ấn riêng</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <!-- <h2>SEASONAL SEAL</h2>
            <h3>Winter Collection -50% Off</h3> -->
        </div>
        <div class="banner-box banner-box2">
            <!-- <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring/Summer 2022</h3> -->
        </div>
        <!-- <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div> -->
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