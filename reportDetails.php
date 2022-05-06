<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Details</title>

    <?php include_once('headerLogin.php'); ?>
</head>
<body class="bg-light">
    
    <div class="container shadow bg-white rounded-3 my-2 p-5 mb-5">
        <h1 class="">Report Status and Details</h1>
        
        <hr>
        <div class="row my-4 g-3">
            <!-- 50% -->
            <div class="col-12 col-md-7">
               
                <div class="card bg-dark">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4 rounded-start">                           
                            <img src="Images/mps santa cruz logo.png" class="img-fluid p-1" alt="...">                        
                        </div>
                        <div class="col-md-8 ">
                            <div class="card-body bg-white">
                                <h5 class="card-title">MPS Santa Cruz, Laguna</h5>
                                <p class="card-text"><small class="">to John Doe</small></p>
                                <hr>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, harum? Nisi omnis inventore eius exercitationem voluptatum? Odit quisquam eos quaerat sunt quae ex, perferendis quam aliquid aperiam laborum amet esse!</p>
                                <p class="card-text"><small class="text-muted">November 27, 2021 3:06pm</small></p>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 50% -->
            <div class="col-12 col-md-5">
                <h3 class="mb-3">Details</h3>
                <div class="gap-2">
                    <label for="" class="form-label text-muted">Report Status:</label>                    
                    <div class="alert alert-info text-center" role="alert">
                        Accepted
                    </div>
                </div>

                <div class="gap-2">
                    <label for="" class="form-label text-muted">Reported Crime:</label>
                    <label for="" class="form-label">Theft</label>
                </div>
                
                <div class="gap-2">
                    <label for="" class="form-label text-muted">Crime Location:</label>
                    <label for="" class="form-label">Brgy. San Antonio, Fabricate Street</label>
                </div>

                <div class="gap-2">
                    <label for="" class="form-label text-muted">Officer in charge:</label>
                    <label for="" class="form-label">PLT. Cardo Dalisay</label>
                </div>
                

            </div>
        </div>
        <hr>

        <h3 class="mb-3 my-4">Photos & Videos</h3>
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <img src="Images/tropy.svg" class="card-img-top img-fluid p-2 border" alt="...">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img src="Images/tropy.svg" class="card-img-top img-fluid p-2 border" alt="...">
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img src="Images/tropy.svg" class="card-img-top img-fluid p-2 border" alt="...">
            </div>
        </div>
        
        
        
    </div>
    <?php include_once('footer.php'); ?>

    
</body>
</html>