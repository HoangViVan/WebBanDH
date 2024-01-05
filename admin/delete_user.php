<?php include "../view/header.php"; 
            include "../controller/controller.php";
            if([$_SERVER["REQUEST_METHOD"]=="POST"]){
                $u=new user();
                $result=$u->getList();
                $j=1;
                $chk=1;
                $pid=$_GET['id'];
                while($set=$result->fetch($j)){
                    if($set['u_id']==$pid){
                        $chk=2;
                    }
                }
                
                if($chk==2){
                        $u->delete($pid);
                            echo"<script>
                            alert('Bạn đã xóa tài khoản thành công');
                            window.location.href='user.php';
                            </script>";
                        
                }else echo"<script>
                    alert('Tài khoản không tồn tại');
                    window.location.href='user.php';
                    </script>";
            }
    ?>