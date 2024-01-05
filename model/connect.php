<?php
    class connect{
        var $db=null;
        public function __construct(){
            $dns='mysql:host=localhost;dbname=dongho';
            $user='root';
            $pass='';
            $this->db=new PDO($dns,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        }
        public function getList($select){
            $results=$this->db->query($select);
            return $results;
        }
        public function getInstance($select){
            $results=$this->db->query($select);
            $results=$results->fetch();
            return $results;
        }
        public function exec($select){
            $results=$this->db->query($select);
            return $results;
        }
    }
?>