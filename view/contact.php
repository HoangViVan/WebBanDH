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
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
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
        <h2>#Let's_Talk</h2>
        <p>LEAVE A MESSAGE, We love to hear form you!</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class='bx bx-map-alt'></i>
                    <p>302A Vườn Lài, Phú Thọ Hòa, Tân Phú, TP HCM</p>
                </li>
                <li>
                    <i class='bx bx-envelope'></i>
                    <p>contact@gmail.com</p>
                </li>
                <li>
                    <i class='bx bxs-phone'></i>
                    <p>(+84)97 001 350</p>
                </li>
                <li>
                    <i class='bx bxs-time' ></i>
                    <p>Monday to Saturday: 7.00am to 18.00pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.299996946731!2d106.62228197371599!3d10.788319658976945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752d4bd4a5f309%3A0x393bb00799074ade!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEPDtG5nIFRoxrDGoW5nIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1687710172483!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Massage"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="../img/people/1.png" alt="">
                <p><span>John Doe</span> Snior Maketing Manager <br> Phone: + 000 123 000 77 88 <br>Email: contact@example.com</p>
            </div>
            <div>
                <img src="../img/people/2.png" alt="">
                <p><span>William Smith</span> Snior Maketing Manager <br> Phone: + 000 123 000 77 88 <br>Email: contact@example.com</p>
            </div>
            <div>
                <img src="../img/people/3.png" alt="">
                <p><span>Emma Stone</span> Snior Maketing Manager <br> Phone: + 000 123 000 77 88 <br>Email: contact@example.com</p>
            </div>
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