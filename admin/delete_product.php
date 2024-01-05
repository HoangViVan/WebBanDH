<?php include "../view/header.php"; 
            include "../controller/controller.php";
            if([$_SERVER["REQUEST_METHOD"]=="POST"]){
                $u=new product();
                $result=$u->getList();
                $j=1;
                $chk=1;
                $pid=$_GET['id'];
                while($set=$result->fetch($j)){
                    if($set['p_id']==$pid){
                        $chk=2;
                    }
                }
                
                if($chk==2){
                        $u->delete($pid);
                            echo"<script>
                            alert('Bạn đã xóa sản phẩm thành công');
                            window.location.href='product.php';
                            </script>";
                        
                }else echo"<script>
                    alert('Sản phẩm không tồn tại');
                    window.location.href='product.php';
                    </script>";
            }
    ?>