<?php
    $output = "";
    if(isset($_POST['btnSignup'])){
        include_once('../Controller/AccountController.php');
        include_once('../Model/Student.php');
        $date = date("Y-m-d H:i:s",time());
        $student = new Student(0,$_POST['name'],$_POST['phone'],$_POST['program'],$_POST['username'],$_POST['password'],$date);
        $accountController = new AccountController();
        $output = $accountController->addStudent($student);
    }
?>
<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    .landing{
    background-color: white;
    border: 3px rgb(14, 2, 2) solid;
    border-radius: 40px;
    margin-top: 0px;
    margin-left:450px;
    margin-right: 500px;
    padding-bottom:0px;
    padding-top: 25px;
    text-align: center;
    font-size: 20px; 
    font-family: 'Times New Roman';
    height: 600px;
    width: 400px;
    
}
    
    </style>
    
    
    <body>
    <div class="landing">
        <!--<div class="container">-->
            <!--<div class="row">-->
                <!--<div class="col-md-6 offset-3 mt-5">-->
                    <!-- Material form register -->
                    <!--<div class="card" >-->

                    <h5 class="card-header info-color white-text text-center py-4 style="color: black;">
                        <strong>Sign up</strong>
                    </h5>

                    <!--Card content-->
                    <!--<div class="card-body px-lg-5 pt-0">-->

                        <!-- Form -->]                        <form class="text-center" method="POST" style="color: #757575;" action="studentSignup.php">

                                <!--<div class="form-row">-->
                                <!--<div class="col">-->
                                    <!-- First name -->
                                    <!--<div class="md-form">-->
                                        <input name="name" type="text" id="materialRegisterFormFirstName" class="form-control">
                                        <label for="materialRegisterFormFirstName">Full Name</label>
                                    <!--</div>-->
                                <!--</div>-->
                              
                            <!--</div>-->
                            <!--<div class="form-row">-->
                                <!--<div class="col">-->
                                    <!-- First name -->
                                    <!--<div class="md-form">-->
                                        <input name="phone" type="text" id="materialRegisterFormFirstName" class="form-control">
                                        <label for="materialRegisterFormFirstName">Phone Number</label>
                                    <!--</div>-->
                                <!--</div>-->
                              
                            <!--</div>-->
                            <!--<div class="form-row">-->
                                <!--<div class="col">-->
                                    <!-- Last name -->
                                    <!--<div class="md-form">-->
                                        <input name="username" type="text" id="materialRegisterFormLastName" class="form-control">
                                        <label for="materialRegisterFormLastName">Username</label>
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col">-->
                                    <!-- Last name -->
                                    <!--<div class="md-form">-->
                                        <input name="password" type="password" id="materialRegisterFormLastName" class="form-control">
                                        <label for="materialRegisterFormLastName">Password</label>
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->

                         
                            <!-- Default unchecked -->
                            <!--<div class="custom-control custom-radio">-->
                            
                            <!--</div>-->
                            <!--<div class="md-form">-->
                            <select name="program" class="browser-default custom-select">
                            <option selected value="UG">Undergraduate</option>
                            <option value="PG">Postgrduate</option>
                            </select>
                            <!--</div>-->


                            <!-- Sign up button -->
                            <button name="btnSignup" class="btn btn-outline-info btn-rounded btn-block my-2 waves-effect z-depth-0" type="submit">Sign up</button>
                            <p style="color:green;"><?php echo $output;?></p>
                            <!-- Register -->
                            <p>Already a member?
                            <a href="./studentLogin.php">Login</a>
                            </p>
                        </form>
                        <!-- Form -->

                    <!--</div>-->

                    <!--</div>-->
                    <!-- Material form register -->
                    <!--</div>-->

                <!--</div>-->
            <!--</div>-->
        <!--</div>--> 
        
        <!--</div>-->
        <!--</div>-->
        <!-- Material form login -->
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

    </body>
</html>
