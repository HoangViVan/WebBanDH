<?php
    include "../model/connect.php";
    include "../model/product.php";
    include "../model/order.php";
    include "../model/cart.php";
    include "../model/user.php";



    //tạo mảng thông tin về giỏ hàng nếu cần
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=array();
    }
    if(isset($_POST['action'])){
        $action=$_POST['action'];

        switch($action){
        case "add_cart":
            // var_dump($_POST['productkey']);
            // echo add_item($_POST['productkey'],$_POST['itemqty']);
            if(isset($_POST['add_cart'])){
                if(isset($_SESSION['cart'])){
                    $myitem=array_column($_SESSION['cart'],'productkey');
                    if(in_array($_POST['productkey'],$myitem)){
                        echo "<script>
                            alert('Item Already Added');
                            window.location.href='../view/index.php';
                        </script>";
                    }else{
                        $count=count($_SESSION['cart']);
                        $_SESSION['cart'][$count]=array('productkey'=>$_POST['productkey']);
                        // echo "<script>
                        // alert('Item Added');
                        // window.location.href='../view/index.php';
                        // </script>";
                        var_dump($_SESSION['cart'][$count]);
                    }
                    
                }else{
                    $_SESSION['cart'][0]=array('productkey'=>$_POST['productkey']);
                    echo "<script>
                    alert('Item Added');
                    window.location.href='../view/index.php';
                    </script>";
                }
            }
            break;
    }
    }
        
?>