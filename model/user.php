<?php
    class user{
        public function __construct(){}
        function getList(){
            $db=new connect();
            $select="select * from user";
            $result=$db->getList($select);
            return $result;
        }
        function getListPage($from,$to){
            $db=new connect();
            $select="select * from user limit $from,$to";
            $result=$db->getList($select);
            return $result;
        }
        function getProductById($id){
            $db=new connect();
            $select="select * from user where u_id=$id";
            $result=$db->getList($select);
            return $result;
        }
        function insert($id,$name,$user,$password,$phone,$gmail,$privacy){
            $db=new connect();
            $insert="insert into user (u_id, u_name, u_user, u_password, u_phone, u_gmail, u_privacy) values ('$id', '$name', '$user', '$password', '$phone', '$gmail', '$privacy')";
            $result=$db->exec($insert);
            return $result;
        }
        function delete($id){
            $db=new connect();
            $delete="delete from user where u_id=$id";
            $result=$db->exec($delete);
            return $result;
        }
        function update($id,$name,$user,$password,$phone,$gmail,$privacy){
            $db=new connect();
            $update="update user set u_name='$name', u_user='$user', u_password='$password', u_phone='$phone', u_gmail='$gmail', u_privacy='$privacy' where u_id='$id'";
            $result=$db->exec($update);
            return $result;
        }
    }
?>