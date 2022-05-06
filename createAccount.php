<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your account</title>
    <?php include_once('header.php'); ?>
</head>
<body class="bg-light">
    <div class="container vh-100">
        <div class="row">
            <!-- 10% -->
            <div class="col-12 col-md-2 d-none d-md-block"></div>

            <!-- 80% main container-->
            <div class="col-12 col-md-8 p-5 mb-5 mt-2 bg-white shadow rounded-3">
                <div class="title">
                    <h1>Create your own account</h1>
                    <label for="">To Serve and protect. Service, Honor, Justice.</label>
                </div>
                <hr>

                <!-- Personal Information -->
                <h5 class="mb-3">Personal Information</h5>
                <!-- row 1 -->
                <div class="row">                
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                </div>
                
                <!-- row 2 -->
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>

                    <div class="col">
                        <!-- nested column -->
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Suffix</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- row 3 -->
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                    
                    <div class="col-6 col-md-6 col-lg-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Birthday</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4">
                    <label for="" class="mb-3">Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                </div>
                

                <!-- Address -->
                <hr>
                <h5 class="mb-3">Address</h5>
                <!-- row 4 -->
                <div class="row mb-4">
                    <div class="col">                    
                        <label for="" class="form-label">Select Barangay</label> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Barangay</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col">                    
                        <label for="" class="form-label">Select Street</label> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Street</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    
                </div>

                
                <hr>                
                <div class="row g-5 ">
                    <!-- User account -->
                    <div class="col-12 col-md-6">
                        <h5 class="mb-3">User Account</h5>
                        <div>
                            <a href="#" class="text-black"> 
                                <div class="text-center mb-3">
                                    <img src="Images/avatar.svg" class="img-fluid col-6" alt="..."><br>
                                    <label for="">Add Profile</label>
                                </div>
                            </a>
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="ShowPassword">
                            <label class="form-check-label" for="ShowPassword">
                                Show Password
                            </label>
                        </div>
                    </div>                   
                    <!-- Requirements -->
                    <div class="col-12 col-md-6">
                        <h5 >Requirements</h5>      
                        
                        <div class="mb-3">
                            <label for="" class="form-label">Select Valid ID</label><br>                          
                            <select class="form-select" aria-label="Default select example">
                                <option selected>IDs</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <small class="text-muted mb-3"><i>Make sure that your ID is Valid</i></small>
                        </div>

                        <div>
                            <label for="" class="form-label">ID Front & Back</label><br>
                            <a class="btn btn-primary col-12 py-4" href="#" role="button">
                                <img src="Icons/icon-attach file.svg" alt="" style="filter: brightness(0) invert(1);">
                                Add Attachment
                            </a>  
                        </div>                                                
                    </div>                                                                                              
                </div>

                <hr>
                <!-- terms and condition -->
                <div class="row">
                    <!-- 50% -->
                    <div class="col-12 col-md-12 col-lg-6 d-none d-md-block"></div>
                    <!-- 50% terms and condition-->
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="TermsAndCondition">
                                <label class="form-check-label" for="TermsAndCondition">
                                    I agree to the terms and conditions
                                </label>
                        </div>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Proceed
                        </button>

                       
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- header -->
                                    <div class="modal-header bg-success text-light">
                                        <h5 class="modal-title" id="exampleModalLabel">Registration Success</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- body -->
                                    <div class="modal-body text-center">
                                        <img src="Images/checked.png" class="img-fluid mx-auto d-block p-4" width="200" alt="...">
                                        <label for="">Your are now registered to MPS Santa Cruz, Laguna</label>
                                    </div>
                                    <!-- footer -->
                                    <div class="modal-footer">                
                                        <a class="btn btn-primary" href="login.php" role="button">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal end -->
                        
                    </div>                   
                </div>                
            </div>

            <!-- 10% -->
            <div class="col-12 col-md-2 d-none d-md-block"></div>
        </div>
    </div>
    
</body>
</html>