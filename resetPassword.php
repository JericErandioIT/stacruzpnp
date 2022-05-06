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
            <div class="col-12 col-md-8 col-lg-6 rounded-3 bg-white p-5 my-3 shadow">
                <h2>Reset your password</h2>
                <hr>
                <!-- image -->
                <img src="Images/mobile-security.png" class="img-fluid mx-auto d-block" width="150" alt="...">

                <div class="my-4">
                    <!-- old pass -->               
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Old Password</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>

                    <!-- new pass -->               
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>

                    <!-- confirm pass -->               
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Show Password
                            </label>
                    </div>
                </div>

                <!-- save button -->                                                               
                <div class="d-grid col-8 mx-auto mt-5">
                    <a class="btn btn-primary" href="login.php" role="button">SAVE</a>
                </div>                                                                                                       
            </div>

            <!-- 20% -->
            <div class="col-12 col-md-2 col-lg-3 d-none d-md-block"></div>
        </div>
    </div>
    
</body>
</html>