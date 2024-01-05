<?php
    class product{
        var $pid=null;
        var $pname=null;
        var $pproducer=null;
        var $pquantity=null;
        var $pimage="../img/product/";
        var $pprice=null;
        var $psale=null;
        var $pguarantee=null;
        var $pinformations=null;
        var $pspecifications=null;
        public function __construct(){}
        function getList(){
            $db=new connect();
            $select="select * from product";
            $result=$db->getList($select);
            return $result;
        }
        function getList1(){
            $db=new connect();
            $select="select * from product where p_id<=8";
            $result=$db->getList($select);
            return $result;
        }
        function getList2(){
            $db=new connect();
            $select="select * from product where p_id>8";
            $result=$db->getList($select);
            return $result;
        }
        function getListPage($from,$to){
            $db=new connect();
            $select="select * from product limit $from,$to";
            $result=$db->getList($select);
            return $result;
        }
        function getProductById($id){
            $db=new connect();
            $select="select * from product where p_id=$id";
            $result=$db->getList($select);
            return $result;
        }
        function getProductByProducer($pproducer){
            $db=new connect();
            $select="select * from product where p_producer like '%$pproducer%'";
            $result=$db->getList($select);
            return $result;
        }
        function insert($id,$name,$pproducer,$pquantity,$pimage,$pprice,$psale,$pguarantee,$pinformation,$pspecification){
            $db=new connect();
            $insert="insert into product (p_id, p_name, p_producer, p_quantity, p_image, p_price, p_sale, p_guarantee, p_informations, p_specifications) values ('$id','$name','$pproducer','$pquantity','$pimage','$pprice','$psale','$pguarantee','$pinformation','$pspecification')";
            $result=$db->exec($insert);
            return $result;
        }
        function delete($id){
            $db=new connect();
            $delete="delete from product where p_id=$id";
            $result=$db->exec($delete);
            return $result;
        }
        function update($id,$name,$pproducer,$pquantity,$pimage,$pprice,$psale,$pguarantee,$pinformation,$pspecification){
            $db=new connect();
            $update="update product set p_name='$name', p_producer='$pproducer', p_quantity='$pquantity', p_image='$pimage', p_price='$pprice', p_sale='$psale', p_guarantee='$pguarantee', p_informations='$pinformation', p_specifications='$pspecification' where p_id='$id'";
            $result=$db->exec($update);
            return $result;
        }
    }
?>