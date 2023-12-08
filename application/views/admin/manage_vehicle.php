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
        <div class="col-8 offset-3 mt-5 mr-5">
            <div class="row">
                <div class="col-12 ml-5">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h2 class="h6 text-muted float-left"><i class="fas fa-tasks"></i>&nbsp; Manage Vehicle | <small><span class="text-danger">O</span>nly the records of the last 30 days are available here</small></h2>
                            
                            
                            <form action="<?=base_url('admin/manage_vehicle');?>" method="get" class="float-right">
                               <div class="input-group mb-3">
                                  <input type="search" name="search" class="form-control form-control-sm shadow-none rounded-0" placeholder="search by vehicle no." style="width:20%;">
                                  <div class="input-group-append">
                                    <button class="btn btn-secondary btn-sm shadow-none rounded-0" type="submit" name="find"><i class="fas fa-search"></i></button>
                                  </div>
                                </div>
                           </form>
                           
                            <table class="table mt-4 table-borderless">
                                <tr>
                                    <th><b>#</b></th>
                                    <th><b>Vehicle Number</b></th>
                                    <th><b>Type</b></th>
                                    <th><b>Area No.</b></th>
                                    <th><b>Charge</b></th>
                                    <th><b>Arrival Time</b></th>
                                    <th><b>Status</b></th>
                                    <th><b>Action</b></th>
                                </tr>
                                <?php foreach($manage_vehicle as $m):?>
                                <tr>
                                    <td><?=$m->id;?></td>
                                    <td><?=$m->vehicle_no;?></td>
                                    <td><?=$m->vehicle_type;?></td>
                                    <td><?=$m->parking_area_no;?></td>
                                    <td><i class="fas fa-dollar-sign text-muted"></i>&nbsp;<?=$m->parking_charge;?></td>
                                    <td><?=$m->arrival_time;?></td>
                                    <td><?php if($m->status==0):?>
                                        
                                        <small class="text-white badge badge-success badge-pill"><b>Parked</b></small>
                                        <?php else:?>
                                        <small class="text-white badge badge-danger badge-pill"><b>Departured</b></small>
                                        
                                        <?php endif;?></small></td>
                                    <td><a href="<?=base_url('admin/vehicle_outgoing/'.$m->id);?>" class="btn btn-sm shadow-none bg-secondary text-white <?php if($m->status==1){echo "disabled bg-danger";}?>">Done</a></td>
                                </tr>
                                <?php endforeach;?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12"></div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>
