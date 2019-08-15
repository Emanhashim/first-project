
<?php 
    $title = "View Status";
    $active = "seeRequest";
    include_once('./template/header.php');
    include_once('../Controller/RequestController.php');
    $requestController=new RequestController();
    $statuses = $requestController->getStatus();
?>

<div class="card">
    <h3 class="card-header text-center font-weight-normal text-uppercase py-4">Clearance request data</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-5 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
          <tr>
            <th class="text-center">Status Id</th>
            <th class="text-center">Request Id</th>
            <th class="text-center">Office Id</th>
            <th class="text-center">Status</th>
            <th class="text-center">Reason</th>
            <th class="text-center">Date</th>
          </tr>
        </thead>
        <tbody>
            <?php
            foreach($statuses as $status){ ?>
          <tr>
              <td><?php echo $status->getId();?></td>
              <td><?php echo $status->getReqId();?></td>
              <td><?php echo $status->getOffId();?></td>
              <td><?php echo $status->getStatus();?></td>
              <td><?php echo $status->getReason();?></td>
              <td><?php echo $status->getDate();?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->


<?php include_once('./template/footer.php'); ?>