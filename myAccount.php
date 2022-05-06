<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>

    <?php include_once('headerLogin.php'); ?>
</head>
<body>
    <div class="container mt-2 mb-5 shadow p-5">
        <h1>My Account</h1>
        <hr>
        <div class="row">
            <!-- 80% -->
            <div class="col-8">
                    <h5>Personal Information</h5>
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
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Birthday</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>

                        <div class="col">
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

                    <hr>
                    <h5>Address</h5>
                    <!-- row 4 -->
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                            <label for="" class="mb-2 mt-1">Select Barangay</label>
                            <select class="form-control btn btn-light dropdown-toggle ">
                                <option value="">Barangay</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                            </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                            <label for="" class="mb-2 mt-1">Select Street</label>
                            <select class="form-control btn btn-light dropdown-toggle ">
                                <option value="">Street</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                                <option value="">Option 3</option>
                            </select>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h5>User Account</h5>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Username</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>
                    
                    <h5>Change Password</h5>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="ShowPassword">
                        <label class="form-check-label" for="ShowPassword">
                            Show Password
                        </label>
                    </div>

            </div>
            <!-- 20% -->
            <div class="col-4">
                <div>
                    <h5>User Account</h5>
                    <a href="#" class="text-black"> 
                        <div class="text-center mb-3">
                            <img src="Images/avatar.svg" class="img-fluid col-6" alt="..."><br>
                        </div>
                        <div class="d-grid gap-2">
                            <a class="btn btn-primary" href="#" role="button">Upload</a>
                        </div> 
                    </a>

                    <hr>
                    <h5>Valid ID</h5>
                    <a href="#" class="text-black"> 
                        <div class="text-center mb-3">
                            <img src="Images/images.svg" class="img-fluid border px-5 py-1" alt="..." ><br>
                        </div>
                        <div class="d-grid gap-2">
                            <a class="btn btn-primary" href="#" role="button">Upload</a>
                        </div> 
                    </a>
                    
                </div>
            </div>
        </div>

        <footer>
            <hr>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="submit">Save Changes</button>
                <button type="button" class="btn text-primary">Cancel</button>
            </div>
        </footer>

    </div>
    
</body>
</html>