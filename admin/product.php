<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                <h2>Thông tin sản phẩm đang tồn tại</h2>
    </section>

    <section id="product_admin" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Tác vụ</td>
                    <td>ID</td>
                    <td>Tên sản phẩm</td>
                    <td>Hãng</td>
                    <td>Số lượng</td>
                    <td>Hình ảnh</td>
                    <td>Giá</td>
                    <td>Giảm giá</td>
                    <td>Bảo hành</td>
                    <td>Chi tiết sản phẩm</td>
                    <td>Thông số kĩ thuật</td>
                </tr>
            </thead>
            <tbody>
            <form action="#" method="post">    
            <?php 
                $pro = new product();
                $result=$pro->getList();
                $j=1;
                while($set=$result->fetch($j)):
            ?>
                <tr>
                    <td>
                        <a href="update_product.php?id=<?php echo $set['p_id']?>">Sửa</a>/<a href="delete_product.php?id=<?php echo $set['p_id']?>">Xóa</a>
                    </td>
                    <td><?php echo $set['p_id']?></td>
                    <td><?php echo $set['p_name']?></td>
                    <td><?php echo $set['p_producer']?></td>
                    <td><?php echo $set['p_quantity']?></td>
                    <td><?php echo $set['p_image']?></td>
                    <td><?php echo $set['p_price']?></td>
                    <td><?php echo $set['p_sale']?></td>
                    <td><?php echo $set['p_guarantee']?></td>
                    <td><?php echo $set['p_informations']?></td>
                    <td><?php echo $set['p_specifications']?></td>
                    
                </tr>                              
            <?php
                            endwhile;
            ?>
            </form>
            
            </tbody>
        </table>
    </section>

    <section id="pagination" class="section-p1">
        <a href="admin.php">Quay lại</a>
    </section>
    
    <?php include "../view/footer.php"; ?>

</body>
</html>