<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbcontroller
 *
 * @author selam
 */
class dbcontroller {
   private $conn;
    function __construct() {
        
        include_once 'dbconnect.php';
    
        $db=new dbconnect();
        $this->conn=$db->connect();
}
public function login($username, $password){
        $stm=$this->conn->prepare("select * from account where username=? and password=?");
        $stm->bind_param("ss", $username, $password);
        $stm->execute();
        $stm->store_result();
        if($stm->num_rows>0){
              return 1;
             
          }else {
              return 2;
    }
}
public function enterprisesignup($companyname,$companyemail,$location,$companywebsite,$fax,$postbox,$companyphone1,
        $companyphone2,$companyphone3,$fullname,$position,$address,$email,$username,$password){
         $stm= $this->conn->prepare("insert into enterprisesignup(companyname,companyemail,location,companywebsite,fax,postbox,companyphone1,
        companyphone2,companyphone3,fullname,position,address,email,username,password) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
         $stm->bind_param("sssssssssssssss",$companyname,$companyemail,$location,$companywebsite,$fax,$postbox,$companyphone1,
        $companyphone2,$companyphone3,$fullname,$position,$address,$email,$username,$password);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
public function indpendentresearchersignup($firstname,$lastname,$email,$phonenumber,$address,$location,$educationallevel,$username,$password){
         $stm= $this->conn->prepare("insert into indpendentresearchersignup(firstname,lastname,email,phonenumber,address,location,educationallevel,username,password)) values(?,?,?,?,?,?,?,?,?);");
         $stm->bind_param("sssssssss",$firstname,$lastname,$email,$phonenumber,$address,$location,$educationallevel,$username,$password);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
        public function usersignup($firstname,$lastname,$email,$phonenumber,$address,$location,$educationallevel,$username,$password){
         $stm= $this->conn->prepare("insert into usersignup(firstname,lastname,email,phonenumber,address,location,educationallevel,username,password)) values(?,?,?,?,?,?,?,?,?);");
         $stm->bind_param("sssssssss",$firstname,$lastname,$email,$phonenumber,$address,$location,$educationallevel,$username,$password);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
        public function universitysignup($institutionname,$institutionemail,$location,$institutionwebsite,$fax,$postbox,$institutionphone1,
        $institutionphone2,$institutionphone3,$fullname,$position,$address,$email,$username,$password){
         $stm= $this->conn->prepare("insert into universitysignup(institutionname,institutionemail,location,institutionwebsite,fax,postbox,institutionphone1,
        institutionphone2,institutionphone3,fullname,position,address,email,username,password) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
         $stm->bind_param("sssssssssssssss",$institutionname,$institutionemail,$location,$institutionwebsite,$fax,$postbox,$institutionphone1,
        $institutionphone2,$institutionphone3,$fullname,$position,$address,$email,$username,$password);
         if($stm->execute()){
             return 1;
             
         }else{
             return 2;
         }
          
        }
}

?>