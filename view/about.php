<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include "header.php"; ?>
    <section id="header">
        <a href="#"><img src="../img/logo.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a class="active" href="about.php">About</a></li>
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
    <section id="page-header" class="about-header">
        <h2>#KnowUs</h2>
        <p>Lorem ipsum dolor sit amet consectetur</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="../img/about/a6.jpg" alt="">
        <div>
            <h2>Who Are You</h2>
            <p>“Người ta vẫn thường nói “thời gian là vĩnh cữu”, mọi thứ trên thế giới này có thể bị lụi tàn hoặc thụt lùi, nhưng thời gian sẽ không bao giờ phai mờ. Chính vì thế, hãy trân trọng thời gian của mình đang có với một chiếc đồng hồ chính hãng (vật dùng để kiểm soát thời gian). Nếu bạn là phái mạnh, thì đồng hồ đeo tay nam chính hãng không chỉ đơn giản dùng để kiểm soát thời gian dành cho bạn mà còn phụ kiện để khẳng định địa vị trong xã hội. Nếu bạn là phái đẹp, thì đồng hồ đeo tay nữ chính hãng sẽ là phụ kiện thời trang sành điệu nhất trong những sự kiện quan trọng dành cho bạn…. Khi mua đồng hồ thời trang cao cấp hay giá rẻ, bạn cũng nên chú ý đến 3 điều: 1 – Thương hiệu nổi tiếng được tin dùng. 2 – Kích cỡ phù hợp. 3 – Bộ máy và tính năng đáp ứng nhu cầu.</p>
            <p>Đồng hồ đeo tay là một kiệt tác của những nhà thiết kế vĩ đại, họ đã chế tác ra những chiếc đồng hồ không chỉ để đếm giờ một cách chính xác mà còn mang lại niềm tự hào cho những ai sở hữu nó.</abbr>
            <br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Cara - Nơi hội tụ những tuyệt phẩm đồng hồ từ các thương hiệu đình đám: Doxa - Citizen - Cardino - Orient...</marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our App <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="../img/about/2.mp4"></video>
        </div>
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