<?php 
    $title = "Send Request";
    $active = "sendRequest";
    include_once('./template/header.php');
    $output = "";
    if(isset($_POST['btnRequest'])){
        include_once('../Controller/RequestController.php');
        include_once('../Model/Request.php');
        $date = date("Y-m-d H:i:s",time());
        $id = $_SESSION['id'];
        $request = new Request(0,$id,$_POST['type'],$_POST['last'],$_POST['reason'],$date);
        $requestController = new RequestController();
        $output = $requestController->sendRequest($request);
    }

?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>OCS</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  
  <body>
<!-- Default form login -->
<div class="container mb-5">
            <div class="row">
                <div class="col-md-6 offset-3 mt-5">
                    <!-- Material form register -->
                    <div class="card">

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Send Request</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center mt-5" method="POST" style="color: #757575;" action="sendRequest.php">

                                <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <input name="last" type="date" id="materialRegisterFormFirstName" class="form-control">
                                        <label for="materialRegisterFormFirstName">Last Class Attended</label>
                                    </div>
                                </div>
                              
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea3">Reason</label>
                            <textarea name="reason" class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                            </div>
                            
                         
                            <!-- Default unchecked -->
                            <div class="custom-control custom-radio">
                            
                            </div>
                            <div class="md-form">
                            <select name="type" class="browser-default custom-select">
                            <option selected value="Withdraw">Withdraw</option>
                            <option value="Transfer">Transfer</option>
                            <option value="Graduate">Graduate</option>
                            </select>
                            </div>


                            <!-- Sign up button -->
                            <button name="btnRequest" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">submit</button>
                            <p style="color:green;"><?php echo $output;?></p>
                        </form>
                        <!-- Form -->

                    </div>

                    </div>
                    <!-- Material form register -->
                    </div>

                </div>
            </div>
        </div> 
        
        </div>
 <!-- Default form login -->
<?php include_once('./template/footer.php'); ?>