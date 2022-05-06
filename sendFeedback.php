<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Feedback</title>
    <?php include_once('headerLogin.php'); ?>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row">
            <!-- left space -->
            <div class="col-2"></div>

            <!-- main container -->
            <div class="col-8 shadow bg-white p-5 my-2">
                <h3>Send your concerns to MPS Santa Cruz, Laguna</h3>
                <hr>
                <label for="" class="text-muted mb-2">Please select at least one from below;</label>
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">System Bugs</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Police Performance</label>
                    </div>
                </div>
                

                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter a message..."></textarea>
                </div>

                <div class="row mb-4 align-items-center">
                    <label for="" class="form-label text-muted">Photos and Videos</label>
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
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary px-5" type="submit">Send</button>
                    <button type="button" class="btn text-primary">Cancel</button>
                </div>

            </div>
            <!-- right space -->
            <div class="col-2"></div>
        </div>
    </div>
    
</body>
</html>