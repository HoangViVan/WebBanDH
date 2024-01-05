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
                <h2>Thêm tài khoản</h2>
    </section>

    <section id="form-details">
        <form action="#" method="post">
            <?php
                $u=new user();
                $result=$u->getList();
                $j=1;
                $chk=1;
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $pid=$_POST['pid'];
                    $pname=$_POST['pname'];
                    $pproducer=$_POST['pproducer'];
                    $pquantity=$_POST['pquantity'];
                    $pimage=$_POST['pimage'];
                    $pprice=$_POST['pprice'];
                    $psale=$_POST['psale'];
                    while($set=$result->fetch($j)){
                        if($set['u_id']==$pid){
                            $chk=$chk+1;
                        }
                    }
                    if($chk==1){
                        $check=$u->insert($pid,$pname,$pproducer,$pquantity,$pimage,$pprice,$psale);
                        if($check){
                            echo"<script>
                            alert('Bạn đã thêm tài khoản thành công');
                            </script>";
                        }else echo"<script>
                        alert('Bạn đã thêm tài khoản không thành công');
                        </script>";
                    }else echo"<script>
                    alert('Tài khoản đã tồn tại');
                    </script>";
                }
                
            ?>
            <h2>Nhập thông tin tài khoản</h2>
            <input type="text" name="pid" placeholder="Mã người dùng">
            <input type="text" name="pname" placeholder="Tên người dùng">
            <input type="text" name="pproducer" placeholder="Tên tài khoản">
            <input type="text" name="pquantity" placeholder="Mật khẩu">
            <input type="text" name="pimage" placeholder="Số điện thoại">
            <input type="text" name="pprice" placeholder="Gmail">
            <input type="text" name="psale" placeholder="Phân quyền">
            <button type="submit" class="normal">Thêm</button>
        </form>
    </section>
    
    <section id="pagination" class="section-p1">
        <a href="admin.php">Quay lại</a>
    </section>

    <?php include "../view/footer.php"; ?>

</body>
</html>