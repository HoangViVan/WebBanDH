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
                <li><a  href="shop.php">Shop</a></li>
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
                <form action="" method="post">
                    <?php $a=$b="";
                        $user=$pass="";
                        $remember=false;
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        
                        $user=$_POST["txtuser"];
                        $pass=$_POST["txtpassword"];
                        $remember=isset($set['checkbox']);
                         //$l=new login();
                         //$d=$l->login1($user2,$pass);
                        
                        if(empty($user)){
                            $a="<span style='color:red;'>Error: Please enter username</span><br>";
                        }
                        if(empty($pass)){
                            $b="<span style='color:red;'>Error: Please enter your password</span><br>";
                        }
                          
                         $db=new connect();
                         $sql="select * from user";
                         $result =$db->getList($sql);
                         $j=1;
                         $chk="";
                        $check=false;
                        
                         while($set=$result->fetch($j)){
                            $u_user=$set['u_user'];
                            $u_password=$set['u_password'];
                            $u_id=$set['u_id'];
                            $u_quyen=$set['u_privacy'];
                            //var_dump($set['u_user']);
                            if($u_user==$user&&$u_password==$pass){
                                    //$check=true;
                                    if($u_quyen==1){
                                        $chk=2;
                                    }else
                                    $chk= 1;

                                    break;
                                }
                            //return $check;

                        }
                        if($chk==2){
                            echo "<script>alert('Bạn đã đăng nhập thành công dưới quyền Admin!!!'); window.location.href='../admin/admin.php';</script>";
                        }else{
                            if($chk==1){
                                echo "<script>alert('Bạn đã đăng nhập thành công!!!'); window.location.href='index.php';</script>";

                            }
                            else{
                            echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng!!!');</script>";
                            }
                        }
                    }
                    if($remember==True){
                        $_COOKIE('txtuser',$user,time()+(3600*24*30));
                        $_COOKIE('txtpassword',$pass,time()+(3600*24*30));
                        //echo "wellcome".$_COOKIE['txtusername']." and".$_COOKIE['txtpassword']." back again";
                    }
                        
                    ?>
                    <div class="top-header">
                        <header>Login</header>
                    </div>

                    <div class="input-field">
                        <input type="text" class="input" name="txtuser" placeholder="Username" required>
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span><?php echo $a; ?>
                    </div>                
                    <div class="input-field">
                        <input type="password" class="input" name="txtpassword" placeholder="Password" required>
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span><?php echo $b;?>
                    </div> 
                    <div class="input-field">
                        <input type="submit" class="submit" value="Login">
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <input type="checkbox" name="check" id="check">
                            <label for="check">Remember Me</label>
                        </div>
                        <div class="right">
                            <label><a href="register.php">Register</a></label>
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