<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Status</title>

    <?php include_once('headerLogin.php'); ?>

</head>
<body>
    <div class="container-lg shadow p-5 mt-2">
        <h1 class="mb-4">Crime Status</h1>
        <table class="table table-hover table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Reported Crime</th>
                <th scope="col">Action</th>
                <th scope="col">Status</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>01-22-00</td>
                <td>Rape</td>
                <td>
                    <a class="btn btn-primary col-12 col-md-6 col-lg-6 disabled" href="#" role="button" ><img src="Icons/icon-edit.svg" class="img-fluid " style="filter: brightness(0) invert(1);" alt=""> Edit</a>
                </td>
                
                <td>
                    <a class="btn btn-success col-12 col-md-6 col-lg-6" href="#" role="button"><img src="Icons/icon-visibility.svg" class="img-fluid mx-2" style="filter: brightness(0) invert(1);" alt="">Solved</a>                    
                </td>  
            </tr>

            <tr>
                <td>10-11-19</td>
                <td>Theft</td>
                <!-- Modal -->
                <td>
                    <!-- Button trigger modal -->
                    <a class="btn btn-primary col-12 col-md-6 col-lg-6" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="Icons/icon-edit.svg" class="img-fluid " style="filter: brightness(0) invert(1);" alt=""> Edit</a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="exampleModalLabel">Update your report</h5>
                            <button type="button" class="btn-close" style="filter: brightness(0) invert(1);" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-start">
                            <div class="row px-3">
                                <div class="mb-3">
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

                            <div class="row mb-3">
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

                            <div class="row mb-3">
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

                            <div class="row mb-3">
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
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Crime Details</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
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
                                                                                                                           
                            <div class="row">
                                <div class="col">
                                <div class="alert alert-warning" role="alert">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    I certify all the information in this form is true and correct to the best of my knowlege.

                                </div>
                                </div>
                            </div>
                            <!-- input END -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="reportStatus.php" role="button">Save changes</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </td>
                <td>
                    <a class="btn btn-secondary col-12 col-md-6 col-lg-6" href="#" role="button"><img src="Icons/icon-visibility.svg" class="img-fluid mx-2" style="filter: brightness(0) invert(1);" alt="">Pending</a>
                </td>
            </tr>

            <tr>
                <td>11-02-18</td>
                <td>Arson</td>
                <td>
                    <a class="btn btn-primary col-12 col-md-6 col-lg-6 disabled" href="#" role="button"><img src="Icons/icon-edit.svg" class="img-fluid " style="filter: brightness(0) invert(1);" alt=""> Edit</a>
                </td>
                <td>
                    <a class="btn btn-danger col-12 col-md-6 col-lg-6" href="#" role="button"><img src="Icons/icon-visibility.svg" class="img-fluid mx-2" style="filter: brightness(0) invert(1);" alt="">Invalid</a>                  
                </td>
            </tr>

            <tr>
                <td>10-11-19</td>
                <td>Theft</td>
                <td>
                    <a class="btn btn-primary col-12 col-md-6 col-lg-6 disabled" href="#" role="button"><img src="Icons/icon-edit.svg" class="img-fluid " style="filter: brightness(0) invert(1);" alt=""> Edit</a>
                </td>
                <td>
                    <a class="btn btn-info text-light col-12 col-md-6 col-lg-6" href="reportDetails.php" role="button"><img src="Icons/icon-visibility.svg" class="img-fluid mx-2" style="filter: brightness(0) invert(1);" alt="">Accepted</a>
                </td>
            </tr>

            <tr>
                <td>11-02-18</td>
                <td>Rape</td>
                <td>
                    <a class="btn btn-primary col-12 col-md-6 col-lg-6 disabled" href="#" role="button"><img src="Icons/icon-edit.svg" class="img-fluid " style="filter: brightness(0) invert(1);" alt=""> Edit</a>
                </td>
                <td>
                    <a class="btn btn-warning text-light col-12 col-md-6 col-lg-6" href="#" role="button"><img src="Icons/icon-visibility.svg" class="img-fluid mx-2" style="filter: brightness(0) invert(1);" alt="">Processing</a>
                </td>   
            </tr>

        </tbody>
        </table>

    </div>
    
    
</body>
</html>