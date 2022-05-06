<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200;500&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Outfit', sans-serif;
        }
    </style>
    
</head>
<body>
    
    <nav id="navbar-example" class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container-sm">
            <!-- nav bar right-->
            <a class="navbar-brand" href="index.php"><img src="Images/mps santa cruz logo.png" alt="" width="50" height="48">MPS Santa Cruz, Laguna</a>
                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

            <!-- nav bar right-->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-pills ms-auto text-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reportCrimeNow.php">Report Crime</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reportStatus.php">Report Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myAccount.php">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sendFeedback.php">Send Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <button type="button" class="btn btn-outline-light">Logout</button>
                        </a>
                    </li>
                    
                </ul>  
            </div>
        </div>
    </nav>

    
    
</body>
</html>