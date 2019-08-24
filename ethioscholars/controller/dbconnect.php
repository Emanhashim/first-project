<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbconnect
 *
 * @author selam
 */
class dbconnect {
    private $conn;
  function __construct() {
      
  }
  
  function connect(){
  $host='localhost';
  $user='root';
  $pass='';
  $dbname='ethioscholar';
  
//  $this->conn=new mysqli($host, $user, $pass, $dbname);
   $this->conn = mysqli_connect($host,$user,$pass,$dbname) or die($error);
   if(mysqli_connect_error()){
       echo 'Error:'.  mysqli_connect_error();
   }
  return $this->conn;
  }
}
