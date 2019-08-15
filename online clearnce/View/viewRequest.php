<?php 
    $title = "View Request";
    $active = "viewRequest";
    $approved = false;
    $rejected = false;
    include_once('./template/header.php');
    include_once('../Controller/RequestController.php');
    include_once('../Model/Request.php');
    $requestController = new RequestController();
    if(isset($_GET['appId'])){
        include_once('../Model/Status.php');
        $offId = $_SESSION['id'];
        $date = date("Y-m-d H:i:s",time());
        $status = new Status(0,$_GET['appId'],$offId,"APPROVED","",$date);
        $requestController->deleteRequest($_GET['appId']);
        $approved = $requestController->insertStatus($status);
    }
    if(isset($_GET['rejId']) && isset($_POST['reason'])){
        include_once('../Model/Status.php');
        $offId = $_SESSION['id'];
        $date = date("Y-m-d H:i:s",time());
        $status = new Status(0,$_GET['rejId'],$offId,"REJECTED",$_POST['reason'],$date);
        $requestController->deleteRequest($_GET['rejId']);
        $rejected = $requestController->insertStatus($status);
    }
    $requests = $requestController->getAllRequests();
    
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
            <div >
                <div class=" mt-5">
                <?php if($approved){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Request Approved Successfully
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php }?>
                <?php if($rejected){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Request Rejected Successfully
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php }?>
                    <!-- Material form register -->
                    <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Request Id</th>
                    <th scope="col">Student Id</th>
                    <th scope="col">Request Type</th>
                    <th scope="col">Last Class</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Request Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($requests as $request){
                    ?>
                        <tr>
                        <th scope="row"><?php echo $request->getId();?></th>
                        <td><?php echo $request->getStdId();?></td>
                        <td><?php echo $request->getType();?></td>
                        <td><?php echo $request->getLast();?></td>
                        <td><?php echo $request->getReason();?></td>
                        <td><?php echo $request->getDate();?></td>
                        <td><a href="viewRequest.php?appId=<?php echo $request->getId();?>" class="btn btn-block btn-success" >Approve</a></td>
                        <td><button class="btn btn-block btn-danger" data-toggle="modal" data-target="#modalLoginForm<?php echo $request->getId();?>">Reject</button></td>
                        </tr>
                        <div class="modal fade" id="modalLoginForm<?php echo $request->getId();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Rejection Reason</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="viewRequest.php?rejId=<?php echo $request->getId();?>" method="POST">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <textarea name="reason" class="form-control p-2" placeholder="Enter rejection reason" id="exampleFormControlTextarea3" rows="7"></textarea>                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-default btn-success" type="submit">Submit</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    <?php }?>
                </tbody>
                </table>

            </div>
        </div> 
        
        </div>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
 <!-- Default form login -->
 </body>
 </html>
<?php include_once('./template/footer.php'); ?>