<?php
    $output = "";
    if(isset($_POST['btnLogin'])){
        include_once('../Controller/AccountController.php');
        $accountController = new AccountController();
        $output = $accountController->officeLogin($_POST['username'],$_POST['password']);
        if($output){
            header('Location: viewRequest.php');
        }else{
            $output = "Invalid Username/Password";
        }
    }
?>
<html>
    <head>
        <title>Login</title>
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
    <body>     
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-4 mt-5">
                    <!-- Material form login -->
                    <div class="card">

                        <h5 class="card-header blue-gradient white-text text-center py-4">
                        <strong>Login</strong>
                        </h5>

                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" method="POST" style="color: #757575;" action="officeLogin.php">

                            <!-- Email -->
                            <div class="md-form">
                            <input type="text" name="username" id="materialLoginFormEmail" class="form-control">
                            <label for="materialLoginFormEmail">Username</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                            <input name="password" type="password" id="materialLoginFormPassword" class="form-control">
                            <label for="materialLoginFormPassword">Password</label>
                            </div>

                            <div class="d-flex justify-content-around">
                            </div>

                            <!-- Sign in button -->
                            <button name="btnLogin" class="btn btn-outline-info btn-rounded btn-block my-4 black z-depth-0" type="submit">Login</button>
                            <p style="color:red;"><?php echo $output;?></P>
                            </form>
                            <!-- Form -->

                    </div>

                </div>
            </div>
        </div> 
        
        </div>
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
