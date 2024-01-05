<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <body>
        <?php include "header.php";
              include "../controller/controller.php";      
        ?>
     
     <section id="header">
        <a href="#"><img src="../img/logo.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a class="active" href="login.php">Login</a></li>
                <li id="lg-bag"><a href="cart.php"><i class='bx bx-shopping-bag'></i></a></li>
                <a href="#" id="close"><i class='bx bx-x' ></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class='bx bx-shopping-bag'></i></a>
            <i class='bx bx-log-out' id="bar"></i>
        </div>
    </section>

     
        <div class="box">
            <div class="container">
                <form action="#" method="post">
            <?php
                $u=new user();
                $result=$u->getList();
                $j=1;
                $chk=1;
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                        $r_name=$_POST['r_name'];
                        $r_user=$_POST['r_user'];
                        $r_pass=$_POST['r_pass'];
                        $r_email=$_POST['r_email'];
                        $r_phone=$_POST['r_phone'];
                        $r_repass=$_POST['r_repass'];
                        $r_privacy=0;
                        $count=1;
                        if($r_pass!=$r_repass){
                    echo "<script>
                    alert('Mật khẩu và nhập lại mật khẩu phải trùng nhau');
                    </script>";
                }else{

                
                        
                while($set=$result->fetch($j)){
                    if($set['u_id']==$count){
                            $count=$count+1;
                        }
                    }
                    if($chk==1){
                        $check=$u->insert($count,$r_name,$r_user,$r_pass,$r_phone,$r_email,$r_privacy);
                        if($check){
                            echo"<script>
                            alert('Bạn đã đăng kí thành công');
                            window.location.href='login.php';
                            </script>";
                        }else echo"<script>
                        alert('Bạn đã đăng kí không thành công');
                        </script>";
                    }else echo"<script>
                    alert('Tài khoản đã tồn tại');
                    </script>";
                }
                }
            ?>
                <div class="top-header">
                    <header>Register</header>
                </div>
            
                
                <div class="input-field">
                    <input type="text" class="input" name="r_name" placeholder="Tên người dùng" required>
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                </div>
                <div class="input-field">
                    <input type="text" class="input" name="r_user" placeholder="Tên tài khoản" required>
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                </div>  
                <div class="input-field">
                    <input type="email" class="input" name="r_email" placeholder="Email" required>
                    <span class="icon"><i class="bi bi-envelope-at"></i></span>
                </div>    
                <div class="input-field">
                    <input type="text" class="input" name="r_phone" placeholder="Số điện thoại" required>
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                </div>            
                <div class="input-field">
                    <input type="password" class="input" name="r_pass" placeholder="Mật khẩu" required>
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                </div>   
                <div class="input-field">
                    <input type="password" class="input" name="r_repass" placeholder="Nhập lại mật khẩu" required>
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                </div>   
                <div class="input-field">
                    <input type="submit" class="submit" value="Register">
                </div>
                <div class="bottom">
                    <div class="left">
                        <input type="checkbox" id="check">
                        <label for="check">Remember Me</label>
                    </div>
                    <div class="right">
                        <label><a href="login.php">Login</a></label>
                    </div>
                </div>
            </form>    
            </div>
        </div>
    </body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/login.js"></script>
</html>