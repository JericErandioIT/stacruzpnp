<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Now</title>

    <?php include_once('headerLogin.php'); ?>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col col-md-2">
                <!-- left spacing -->
            </div>

            <!-- main container -->
            <div class="col-12 col-md-8 p-5 shadow bg-white rounded-3 mt-2 mb-5">

                <h1 class="mb-4">Report Crime Now</h1>
                <hr>
                <!-- input START -->
                <div class="mb-4">
                    <label for="" class="mb-2">Please specify if you are the;</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Victim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Witness</label>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <label for="" class="form-label">Select Crime Category</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Crime</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">if others, please specify.</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                </div>

                <div class="row mb-4">
                <label for="" class="form-label">Select Crime Location</label>
                    <div class="col">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Barangay</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>

                    <div class="col">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Street</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>   
                    </div>
                </div>

                <div class="row mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Suspect(s)</label>
                    <div class="col-8">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Optional">
                    </div>
                    <div class="col ">
                        <div class="d-grid">
                            <button class="btn btn-primary" type="button">Add</button>  
                        </div>
                    </div>   
                </div>

                <div class="mb-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Crime Details</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter a message..."></textarea>
                </div>

                <div class="row mb-4 align-items-center">
                    <label for="" class="form-label">Evidence(s)</label>
                    <div class="col">                        
                        <div class="d-grid">
                            <a class="btn btn-primary p-3" href="#" role="button">
                                <img src="Icons/icon-upload.svg" class="img-fluid mx-1" style="filter: brightness(0) invert(1);" alt="...">Upload Media
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <i>Maximum of 100mb</i>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col">
                    <div class="alert alert-warning" role="alert">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                         I certify all the information in this form is true and correct to the best of my knowlege.

                    </div>
                    </div>
                    
                </div>

                <!-- submit btn -->
                <div class="d-grid col-12 ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Submit
                    </button>
                    
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <!-- header -->
                                <div class="modal-header bg-success text-light">
                                    <h5 class="modal-title" id="exampleModalLabel">Report Submitted</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- body -->
                                <div class="modal-body text-center">
                                    <img src="Images/checked.png" class="img-fluid mx-auto d-block p-4" width="200" alt="...">
                                    Thank you! Your report has been sent.
                                    
                                </div>
                                <!-- footer -->
                                <div class="modal-footer">                
                                    <a class="btn btn-primary p-2" href="reportStatus.php" role="button">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal end -->
                    
                </div>
                
                <!-- input END -->

            </div>

            <div class="col col-md-2">
                <!-- right spacing -->
            </div>

        </div>
    </div>
    
</body>
</html>