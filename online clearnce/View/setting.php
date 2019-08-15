<?php 
    $title = "View setting";
    $active = "setting";
    $approved = false;
    $rejected = false;
    include_once('./template/header.php');
    include_once('../Controller/RequestController.php');
    include_once('../Model/updatepass.php');
    
 ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Online Student Clearance System</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<style>
    .card{
        margin-top:100px;
        margin-right:600px;
        margin-bottom:20px;
        margin-left:600px;
            
    }
</style>


        
<form class="text-center" style="color: black;" action="../model/updatepass.php" method="post" name="users">
        <h4> Change Password<h4>
    <h6>username</h6><input type="text" id="user" name="user"/></br>

    <h6>Old Password</h6><input type="password" id="pass"  name="pass"><br>
        

      <!-- Password -->
    <h6>New Password</h6><input type="password" id="pass"  name=" newpass"><br>
    <h6>Confirm Password</h6><input type="password" id="pass"  name=" confirmpass"><br><br>
    <button  type="submit" onclick="validate()">Change Password</a></button><br> <!-- Register -->
    </form>
      <script>
          <p>
          function validate(){
var pass =document.forms["users"]["newpass"].value;
var confirmpass= document.forms["users"]["confirmpass"].value;

if(pass !== confirmpass){
   alert("New Password doesn't match")
    header("Location: /onlineStudentCleranceSystem/MDB-Free_4.8.2/ruth/r.html");
}
}  

    </div>
    <!-- Card body -->

</div>
<!-- Card -->
    


<?php include_once('./template/footer.php'); ?>
</body>

</html>
