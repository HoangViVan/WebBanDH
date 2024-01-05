<?php
    function add_item($key,$quantity){
        $pros=new product();
        $pro=$pros->getProductById($key);
        $set=$pro->fetch();
        //Nếu sản phẩm đã có trong giỏ hàng, cập nhật số lượng
        if($_SESSION['cart'][$key]){
            $quantity+=$_SESSION['cart'][$key]['qty'];
            update_item($key,$quantity);
            return;
        }
        $cost = $set['p_price'];
        $total=$cost*$quantity;
        $item=array(
            'name'=>$set['p_name'],
            'cost'=>$cost,
            'qty'=>$quantity,
            'total'=>$total
        );
        $_SESSION['cart'][$key]=$item;
    }
    //Cập nhật sản phẩm cùng giỏ hàng
    function update_item($key, $quantity){
        $quantity=(int)$quantity;
        if($quantity<=0){
            unset($_SESSION['cart'][$key]);
        }
        else{
            $_SESSION['cart'][$key]['qty']=$quantity;
            $total=$_SESSION['cart'][$key]['cost']*$_SESSION['cart'][$key]['qty'];
            $_SESSION['cart'][$key]['total']=$total;
        }
    }
    //Lấy tổng doanh thu của giỏ hàng
    function get_subtotal(){
        $subtotal=0;
        foreach($_SESSION['cart'] as $item){
            $subtotal+=$item['total'];
        }
        $subtotal=number_format($subtotal,2);
        return $subtotal;
    }
    
?>