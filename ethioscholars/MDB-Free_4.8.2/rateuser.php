

<?php

//include ('controller/db.php');
include_once '../controller/dbconnect.php';
$db=new dbconnect();
$conn=$db->connect();



$sql= "SELECT * FROM rating where ratingid='1'";

$res= mysqli_query($conn,$sql);

 
     


?>
<html>
    
    <head>
        
   


 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
         
    </head>
    <body>


<?php

while ($row = mysqli_fetch_array($res)){
       $username=$row[5];
         $feedback=$row['3'];
          $ratingnumber=$row['4'];
    
//    echo $id. "" . $name . "<a href='download.php?dow=$path'>Download</a><br>";
?>
        <?php
echo '
    <div class="media" style="margin:100px; margin-left:400px;">
     <img class="d-flex mr-3" width="100px" height="100px;"   src="images.jpg" alt="Generic placeholder image">
   <div class="media-body" style="margin-left:10px;">';

    echo '<h3> '.$username.'</h5>';
          echo '<h5>  '.$feedback.'</h5>';
          for($a=0;$a<$ratingnumber;$a++){
      
          echo '<label for="5">☆</label>';
      }
        echo '<hr>';
 echo' </div>
</div>

';
      // echo '<img src="'.$picpath.'" width="60" height="70" alt="cover"/>';
    
       
       
    //echo $id. "" . $name . $picpath. "<a href='download.php?id=".$id."'>Download</a><br>";
    
 

}
?>



 
 