<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php include "../view/header.php"; 
            include "../controller/controller.php";
    ?>
    <section id="header">
        <a href="#"><img src="../img/logo.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="../view/index.php">Home</a></li>
                <li><a href="../view/shop.php">Shop</a></li>
                <li><a href="../view/blog.php">Blog</a></li>
                <li><a href="../view/about.php">About</a></li>
                <li><a href="../view/contact.php">Contact</a></li>
                <li><a href="../view/login.php">Login</a></li>
                <li id="lg-bag"><a href="../view/cart.php"><i class='bx bx-shopping-bag'></i></a></li>
                <a href="#" id="close"><i class='bx bx-x' ></i></a>
                <li><a class="active" href="../admin/admin.php"><i class='bx bxs-user-circle'></i></a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="../view/cart.php"><i class='bx bx-shopping-bag'></i></a>
            <i class='bx bx-log-out' id="bar"></i>
        </div>
    </section>
    <section id="page-header-admin">
                <h2>Bạn muốn thực hiện tác vụ gì?</h2>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Tài khoản</td>
                    <td>SẢn phẩm</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="add_user.php">Thêm tài khoản</a></td>
                    <td><a href="add_product.php">Thêm sản phẩm</a></td>
                </tr>
                <tr>
                    <td><a href="user.php">Sửa thông tin tài khoản</a></td>
                    <td><a href="product.php">Sửa thông tin sản phẩm</a></td>
                </tr>
                <tr>
                    <td><a href="user.php">Xóa tài khoản</a></td>
                    <td><a href="product.php">Xóa sản phẩm</a></td>
                </tr>      
            </tbody>
        </table>
    </section>
    
    <?php include "../view/footer.php"; ?>
</body>
</html>