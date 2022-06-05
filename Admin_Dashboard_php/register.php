<?php 

include "core/base.php" ;
include "core/function.php" 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/app.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url ?>assets/css/style.css">
</head>
<body style="background:var(--primary-soft)">

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-6">
            <div class="card">
                <div class="card-body">

                <div class="text-center text-primary ">
                        
                       <h4>User Register</h4>
                            
                        </div>
                        <hr>
                        <?php

                            if(isset($_POST['regbtn'])){
                                echo register();
                            };

                        ?>
                    <form method="post">
                    
                        <div class="form-group">

                        <label>
                        <i class="feather-users text-primary"></i>
                            Your Name
                        </label>   
                        <input type="text" name="name" class="form-control" required>
                            
                        </div>
                        <div class="form-group">

                        <label>
                        <i class="feather-mail text-primary" ></i>
                            Your Email
                        </label>   
                        <input type="text" name="email" class="form-control" required>
                            
                        </div>
                        <div class="form-group">

                        <label>
                        <i class="feather-lock text-primary" ></i>
                            Your Password
                        </label>   
                        <input type="password" name="password" min="8" class="form-control" required>
                        
                        </div>
                        <div class="form-group">

                        <label>
                        <i class="feather-lock text-primary" ></i>
                            Confirm Password
                        </label>   
                        <input type="password" name="cpassword" min="8" class="form-control" required>
                            
                        </div>
                        <br>
                        <div class="form-group">

                        <button class="btn btn-primary" name="regbtn">Register</button>
                        <a href="login.php" class="btn btn-outline-primary">Login</a>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
<script src="<?php echo $url ?>assets/vendor/jquery.min.js"></script>
<script src="<?php echo $url ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url ?>assets/vendor/way_point/jquery.waypoints.js"></script>
<script src="<?php echo $url ?>assets/vendor/counter_up/counter_up.js"></script>

<script>
let current=location.href;
$(".menu-item-link").each(
    function () {
      let links=$(this).attr("href"); 
      if (current==links) {
        //   console.log(current);
        $(this).addClass('active');
      }
    }
);

</script>
</body>
</html>

<?php include "template/footer.php" ?>
    
