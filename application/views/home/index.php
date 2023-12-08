<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Parking Management System</title>
    <link rel="icon" href="<?=base_url('assets/images/ico.png');?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css');?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
</head>
<body class="bg-light" style="font-family: Quicksand;">
   <div class="container-fluid mt-3">
       <div class="row">
           <div class="col-lg-12">
               <h4><i class="fas fa-car-side text-danger"></i>&nbsp; <span class="text-danger">AZ</span>PARK<span class="text-danger">GO</span></h4><hr>
           </div>
       </div>
   </div>
    <div class="container my-3">
        <div class="row no-gutters">
            <div class="col-lg-6 mx-auto mt-5">
               <?=$this->session->flashdata('error');?>
                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-body">
                        <h5 class="h5 text-center"><i class="fas fa-sign-in-alt text-success"></i>&nbsp; Admin Login</h5>
                        <form action="<?=base_url('home/index');?>" method="post" class="mt-4">
                            <label class="m-0 p-0 text-muted">Username</label>
                            <input type="text" name="username" class="form-control form-control-sm shadow-none" required>
                            <label class="m-0 p-0 mt-2 text-muted">Password</label>
                            <input type="password" name="password" class="form-control form-control-sm shadow-none" required>
                            <input type="submit" class="btn btn-block mt-4 text-white bg-success shadow-none" name="send" value="Login">
                        </form>
                        <div class="row no-gutters">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mt-5 mx-auto"><br><br>
                <p class="text-center small mt-4">&copy; <?php echo date("Y"); ?> AzParkGo | Developed By ENG.AZAZ AHMED</p>
            </div>
        </div>
    </div>
</body>
</html>