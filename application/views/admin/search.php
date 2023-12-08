<?php include('header.php');?>

<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-3" style="position:fixed">
            <div class="card border-0 shadow-sm">
                <div class="card-body m-0 p-0">
                    <?php include('sidebar.php');?>
                </div>
            </div>
        </div>
        <div class="col-8 offset-3 mr-5 mt-5">
            <div class="row">
                <div class="col-12 ml-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-search"></i> &nbsp;Search Data | <small><span class="text-danger">O</span>nly the records of the last 30 days are available here</small></h2>
                            <div class="row">
                                <div class="col-8 mx-auto">
                                    <form action="<?=base_url('admin/search/'.'searching'.'/');?>" method="get" class="mt-5">
                                       <div class="input-group mb-3">
                                          <input type="search" name="search" class="form-control shadow-none rounded-0" placeholder="Search by Vehicle Number OR Receipt Serial Number">
                                          <div class="input-group-append">
                                            <button class="btn btn-secondary shadow-none rounded-0" type="submit" name="find"><i class="fas fa-search"></i></button>
                                          </div>
                                        </div>
                                   </form>
                                </div>
                            </div> <br>
                            <?php if($this->uri->segment(3)=='searching'):?>
                                <table class="table mt-4 table-borderless">
                                <tr>
                                    <th><b>#</b></th>
                                    <th><b>Vehicle Number</b></th>
                                    <th><b>Type</b></th>
                                    <th><b>Area</b></th>
                                    <th><b>Charge</b></th>
                                    <th><b>Arrival Time</b></th>
                                    <th><b>Status</b></th>
                                </tr>
                                <?php foreach($vehicle_details as $v):?>
                                <tr>
                                    <td><?=$v->id;?></td>
                                    <td><?=$v->vehicle_no;?></td>
                                    <td><?=$v->vehicle_type;?></td>
                                    <td><?=$v->parking_area_no;?></td>
                                    <td><i class="fas fa-dollar-sign text-muted"></i>&nbsp;<?=$v->parking_charge;?></td>
                                    <td><?=$v->arrival_time;?></td>
                                    <td><?php if($v->status==0):?>
                                        
                                        <p class="text-white badge badge-success badge-pill"><b>Parked</b></p>
                                        <?php else:?>
                                        <p class="text-white badge badge-danger badge-pill"><b>Departured</b></p>
                                        
                                    <?php endif;?></small></td>
                                </tr>
                                <?php endforeach;?>
                            </table>
                            <?php else:?>
                            <h5 class="text-center text-danger mt-5 mb-5">
                                Please search and get results here!
                            </h5>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>
