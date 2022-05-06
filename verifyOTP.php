<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <?php include_once('header.php'); ?>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <!-- 20% -->
            <div class="col-12 col-md-2 col-lg-3 d-none d-md-block"></div>

            <!-- 80% main container -->
            <div class="col-12 col-md-8 col-lg-6 rounded-3 bg-white p-5 my-3 text-center shadow">
                <h2>Forgot Password?</h2>
                <hr>
                <!-- image -->
                <img src="Images/lock.png" class="img-fluid mx-auto d-block" width="150" alt="...">

                <!-- phone number -->
                <div class="my-3">
                    <div class="text-start form-label">
                        <label for="exampleFormControlInput1" class="form-label">Enter registered mobile number: </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="xxx-xxxx-xxxx">
                    </div>      
                    <div class="">
                        <small class="text-muted">We send an OTP Code to your mobile number.</small> 
                        <small><a href="#" class="link-primary">Resend OTP?</a></small>
                    </div>  
                </div>

                <!-- enter OTP -->
                <div class="mx-5 my-4">
                    <label for="" class="form-label">Please enter the OTP Code we send to you.</label>
                    <div class="input-group gap-2">
                        <input type="text" aria-label="" class="form-control">
                        <input type="text" aria-label="" class="form-control">                    
                        <input type="text" aria-label="" class="form-control">
                        <input type="text" aria-label="" class="form-control">
                    </div>
                </div>
                
               
                <div class="d-grid gap-2 col-8 mx-auto mt-5">
                    <a class="btn btn-primary" href="resetPassword.php" role="button">Verify</a>
                </div>                                                                                                       
            </div>

            <!-- 20% -->
            <div class="col-12 col-md-2 col-lg-3 d-none d-md-block"></div>
        </div>
    </div>
    
</body>
</html>