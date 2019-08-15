 <?php
   $active = "grant";
   include_once './template/header.php';
  ?> 
                
                <div class= "grant">
                <div class="accordion" id="accordionExample">
                 <div class="card z-depth-0 bordered">
                 <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                      aria-expanded="true" aria-controls="collapseOne">
                      Natural Science
                    </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                  data-parent="#accordionExample">
                  <div class="card-body">
                     <option value="" disabled selected>Engineering</option>

                     <option value="1">Mechanical </option>
              <option value="1">Chemical </option>
              <option value="2">Electrical</option>
              <option value="3">Civil</option>
              <option value="2">Computer</option>
              <option value="3">Software</option>
                  </div>
                </div>
              </div>
              <div class="card z-depth-0 bordered">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Social Science
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                     <option value="" disabled selected>Social Science</option>
                    <option value="1">Marketing</option>
                    <option value="2">Accounting</option>
                    <option value="3">Bussiness Administrator</option>
                    <option value="2">Resercher</option>
                     <option value="3">other</option>
                  </div>
                </div>
                </div>

      </div>
      </div>
        
 
       
         <?php
       include_once './template/footer.php';
        ?> 
        
  