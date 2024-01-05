<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['add_cart'])){
        if(isset($_SESSION['cart'])){
            $myitem=array_column($_SESSION['cart'],'productkey');
            if(in_array($_POST['productkey'],$myitem)){
                echo "<script>
                    alert('Sản phẩm đã được thêm');
                    window.location.href='index.php';
                </script>";
            }else{
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('productkey'=>$_POST['productkey']);
                echo "<script>
                alert('Thêm vào giỏ hàng thành công');
                window.location.href='index.php';
                </script>";
            }
            
        }else{
            $_SESSION['cart'][0]=array('productkey'=>$_POST['productkey']);
            echo "<script>
            alert('Item Added');
            window.location.href='index.php';
            </script>";
        }
    }else echo "Không tồn tại";
    if(isset($_POST['add_cart_shop'])){
        if(isset($_SESSION['cart'])){
            $myitem=array_column($_SESSION['cart'],'productkey');
            if(in_array($_POST['productkey'],$myitem)){
                echo "<script>
                    alert('Sản phẩm đã được thêm');
                    window.location.href='shop.php';
                </script>";
            }else{
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('productkey'=>$_POST['productkey']);
                echo "<script>
                alert('Thêm vào giỏ hàng thành công');
                window.location.href='shop.php';
                </script>";
            }
            
        }else{
            $_SESSION['cart'][0]=array('productkey'=>$_POST['productkey']);
            echo "<script>
            alert('Item Added');
            window.location.href='shop.php';
            </script>";
        }
    }else echo "Không tồn tại";
    if(isset($_POST['add_cart_sproduct'])){
        if(isset($_SESSION['cart'])){
            $myitem=array_column($_SESSION['cart'],'productkey');
            $id=$_POST['productkey'];
            if(in_array($_POST['productkey'],$myitem)){
                echo "<script>
                    alert('Sản phẩm đã được thêm');
                    window.location.href='sproduct.php?id=".$id."';
                </script>";
            }else{
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('productkey'=>$_POST['productkey']);
                echo "<script>
                alert('Thêm vào giỏ hàng thành công');
                window.location.href='sproduct.php?id=".$id."';
                </script>";
            }
            
        }else{
            $_SESSION['cart'][0]=array('productkey'=>$_POST['productkey']);
            echo "<script>
            alert('Item Added');
            window.location.href='shop.php';
            </script>";
        }
    }else echo "Không tồn tại";
    if(isset($_POST['Remove_Item'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['productkey']==$_POST['productkey']){
                 unset($_SESSION['cart'][$key]);
                 $_SESSION['cart']==array_values($_SESSION['cart']);

                 echo"<script>
                    alert('Bạn đã xóa sản phẩm khỏi giỏ hàng thành công');
                    window.location.href='cart.php';
                    </script>";
            }
        }
    }
}
?>