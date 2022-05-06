<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Area</title>
    
    <?php include_once('header.php'); ?>
</head>
<body class="bg-light">
    
    <div class="container">
        <div class="row">
          <!-- 20% -->
          <div class="col-12 col-md-1 col-lg-1 d-none d-md-block"></div>

          <!-- 80% main container -->
          <div class="col-12 col-md-10 col-lg-10 shadow rounded-3 p-5 bg-white my-3">
            <div class="row align-items-center g-3">
              <!-- picture -->
              <div class="col-12 col-md-6 col-lg-6">
                <img src="Images/gadgets.svg" class="img-fluid" alt="">
              </div>

              <!-- login -->
              <div class="col-12 col-md-6 col-lg-6">
                <h1 class="mb-3">Login to your account</h1>
                  <div class="mb-3">
                      <label for="exampleFormControlInput" class="form-label">Username</label>
                      <input type="email" class="form-control" id="exampleFormControlInput" placeholder="">
                  </div>
                  <div class="mb-3">
                      <label for="inputPassword" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputPassword">
                  </div>
                  <div class="row mb-3">
                  <div class="col">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                      Show Password
                                  </label>
                          </div>
                      </div>
                      <div class="col text-end">
                          <a href="#" class="link-primary">Forgot Password?</a>
                      </div>
                  </div>
                  <a href="dashboard.php">
                      <button type="button" class="btn btn-primary col-12 mb-5">Login</button>
                  </a>
                  
                  <p class="text-center">Don't have an account? <a href="createAccount.php" class="link-primary">Create yours now!</a> </p>
            
              </div>
            </div>
          </div>
          <!-- 20% -->
          <div class="col-12 col-md-1 col-lg-1 d-none d-md-block"></div>
        </div>
    </div>

    
        
   
    
</body>
</html>