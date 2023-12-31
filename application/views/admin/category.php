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
                <div class="col-8 ml-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-th-list"></i> &nbsp;Add Category</h2>
                            <form action="<?=base_url('admin/category');?>" method="post" class="mt-4">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="text-muted  m-0 p-0">Parking Area Number</label>
                                            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control form-control-sm shadow-none" name="parking_area_no" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="text-muted  m-0 p-0">Vehicle Type</label>
                                            <input type="text" class="form-control form-control-sm shadow-none" name="vehicle_type" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label class="text-muted  m-0 p-0">Vehicle limit</label>
                                   <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="form-control form-control-sm shadow-none" name="vehicle_limit" required>
                                </div>
                                <div class="form-group">
                                   <label class="text-muted  m-0 p-0">Parking Charge</label>
                                   <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="form-control form-control-sm shadow-none" name="parking_charge" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="send" class="btn text-white mt-4 btn-block shadow-none border-0 bg-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="text-muted h6"><b><i class="fas fa-universal-access"></i>&nbsp; Details:</b></h2>
                            
                            <?php foreach ($categoryy as $c):?>
                            <div class="mt-4">
                                <div class="media-body">
                                    <?= $c->vehicle_type;?>
                                    <p class="float-right"><i class="fas fa-dollar-sign"></i>&nbsp; <?=$c->parking_charge;?></p>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3 ml-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h6 text-muted"><i class="fas fa-tasks"></i> &nbsp;Manage Category</h2>
                            <table class="table mt-4 table-borderless">
                                <tr>
                                    <th><b>#</b></th>
                                    <th><b>Area Number</b></th>
                                    <th><b>Vehicle Type</b></th>
                                    <th><b>Vehicle Limit</b></th>
                                    <th><b>Charge</b></th>
                                    <th><b>Status</b></th>
                                    <th><b>Action</b></th>
                                </tr>
                                <?php foreach($category as $c):?>
                                <tr>
                                    <td><?=$c->cat_id;?></td>
                                    <td><?=$c->parking_area_no;?></td>
                                    <td><?=$c->vehicle_type;?></td>
                                    <td><?=$c->vehicle_limit;?></td>
                                    <td><?=$c->parking_charge;?></td>
                                    <td><?php if($c->status==0):?>
                                        
                                        <span class="badge badge-danger">Deactivated</span>
                                        <?php else:?>
                                        <span class="badge badge-success">Activated</span>
                                        
                                        
                                        <?php endif;?></small></td>
                                    <td>
                                        <div class="modal fade" id="rock<?= $c->cat_id;?>">
                                           <div class="modal-dialog">
                                               <div class="modal-content">
                                                   <div class="modal-body">
                                                       <i class="far fa-frown"></i>&nbsp; Do you really want to delete this category?
                                                   </div>
                                                   <div class="modal-footer">
                                                       <a href="<?= base_url('admin/delete/category/'.$c->cat_id);?>" class="btn btn-sm btn-danger shadow-none">&nbsp; Yes &nbsp;</a>
                                                       <a href="" class="btn btn-dark btn-sm shadow-none">&nbsp; No &nbsp;</a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       
                                       <?php if($c->status==0):?>
                                       <a href="<?=base_url('admin/status/status_active/'.$c->cat_id);?>" class="btn btn-sm bg-success text-white shadow-none"><small>Activate</small></a>
                                       <?php else:?>
                                       <a href="<?=base_url('admin/status/status_deactivate/'.$c->cat_id);?>" class="btn btn-sm bg-danger text-white shadow-none"><small>Deactivate</small></a>
                                       <?php endif;?>
                                       <button type="button" data-toggle="modal" data class="btn btn-sm btn-danger shadow-none" data-target="#rock<?= $c->cat_id;?>">
                                            <i class="fas fa-trash fa-xs"></i>
                                       </button>
                                       <?= anchor_popup('admin/edit/edit_category/'.$c->cat_id,'<i class="fas fa-edit fa-xs"></i>',['class'=>"btn btn-info btn-sm shadow-none"]);?>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>
