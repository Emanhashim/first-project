

<?php
 include_once '../controller/AccountController.php';

if(isset($_POST['user']) && isset($_POST['newpass'])){
  $user=$_POST['user']; 
 
   $newpass=$_POST['newpass'];
   echo $user;
  
   $db=new AccountController();
   $result=$db->updatepass($user,$newpass);
   
       if($result == 1){
        //secho 'sucessfuly login';
        header("Location: /ocs/view/index.php");
      // window.open("../MDB-Free_4.8.2/index.php");
       }
       else {
//         
           
 header("Location: /OCS/MDB-Free_4.8.2/invalid.html");

                  
       }
    

}



