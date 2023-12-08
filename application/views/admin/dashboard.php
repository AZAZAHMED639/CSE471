<?php include('header.php');?>

<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body m-0 p-0">
                    <?php include('sidebar.php');?>
                </div>
            </div>
        </div>
        <div class="col-7 offset-1 mt-5">
           <div class="row">
            <div class="col-6">
                <div class="card rounded-10 border-0 shadow-sm bg-info text-white">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-7"><br>
                              <h1 class="ml-2"><?=$this->datawork->count_data('add_vehicle',['status'=>0]);?></h1>
                              <h6 class="my-3">Vehicles Parked</h6>
                           </div>
                           <div class="col-5"><br>
                               <ul class="ml-auto my-2">
                                 <i class="fas fa-parking fa-4x"></i>
                               </ul>
                           </div>
                       </div>
                    </div>
                    <br>
                </div>
            </div>
               <div class="col-6">
                   <div class="card rounded-0 border-0 shadow-sm bg-dark text-white">
                       <div class="card-body">
                          <div class="row">
                              <div class="col-7"><br>
                                 <h1 class="ml-2"><?=$this->datawork->count_data('add_vehicle',['status='=>1]);?></h1>
                                 <h6 class="my-3">Departed Vehicles</h6>
                              </div>
                              <div class="col-5"><br>
                                  <ul class="ml-auto my-2">
                                    <i class="fas fa-car fa-4x"></i>
                                  </ul>
                              </div>
                          </div>
                       </div>
                       <br>
                   </div>
               </div>
               
               <div class="col-6">
                   <div class="card rounded-0 border-0 shadow-sm bg-danger text-white mt-4">
                       <div class="card-body">
                          <div class="row">
                              <div class="col-7"><br>
                                 <h1 class="ml-2"><?=$this->datawork->count_data('category',['cat_id!='=>NULL]);?></h1>
                                 <h6 class="my-3">Available Category</h6>
                              </div>
                              <div class="col-5"><br>
                                  <ul class="ml-auto my-2">
                                    <i class="fas fa-box fa-4x"></i>
                                  </ul>
                              </div>
                          </div>
                       </div>
                       <br>
                   </div>
               </div>
               <div class="col-6">
                   <div class="card rounded-0 border-0 shadow-sm bg-success text-white mt-4">
                       <div class="card-body">
                          <div class="row">
                              <div class="col-7">
                                 <br>
                                 <h1 class="ml-2"><i class="fas fa-dollar-sign fa-xs"></i>&nbsp;<?=$this->datawork->column_sum('parking_charge','add_vehicle');?></h1>
                                 
                                 <h6 class="my-3">Total Earnings</h6>
                              </div>
                              <div class="col-5"><br>
                                  <ul class="ml-auto my-2">
                                    <i class="fas fa-money-check-alt fa-4x"></i>
                                  </ul>
                              </div>
                          </div>
                       </div>
                       <br>
                   </div>
               </div>
           </div> 

           <div class="row">
            <div class="col-6">
                <br>
             <div class="card rounded-0 border-0 shadow-sm bg-secondary text-white">
                 <div class="card-body">
                    <div class="row">
                        <div class="col-7"><br>
                           <h1 class="ml-2"><?=$this->datawork->count_data('add_vehicle',['id!='=>0]);?></h1>
                           <h6 class="my-3">Total Records</h6>
                        </div>
                        <div class="col-5"><br>
                            <ul class="ml-auto my-2">
                              <i class="fas fa-layer-group fa-4x"></i>
                            </ul>
                        </div>
                    </div>
                 </div>
                 <br>
             </div>
         </div>

               <div class="col-6">
                   <br>
                <div class="card rounded-0 border-0 shadow-sm bg-primary text-white">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-7"><br>
                              <h1 class="ml-2"><?=$this->datawork->datawork->column_sum('vehicle_limit','category');?></h1>
                              <h6 class="my-3">Total Parking Slots</h6>
                           </div>
                           <div class="col-5"><br>
                               <ul class="ml-auto my-2">
                                 <i class="fas fa-check-double fa-4x"></i>
                               </ul>
                           </div>
                       </div>
                    </div>
                    <br>
                </div>
            </div>

               
           </div>
        </div>
    </div>
</div>

<script>
function myFunction() {
    var x = document.getElementById("notification");
    if (x.style.display === "block") {
        x.style.display = "none";
    } 
    else {
        x.style.display = "none";
    }
}
</script>

<?php include('footer.php');?>
