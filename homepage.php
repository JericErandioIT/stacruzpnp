<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <title>Crime Reporting System</title>

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example">
    
    <nav id="navbar-example" class="navbar navbar-expand-xl navbar-dark bg-primary shadow">
        <div class="container-sm">
            <!-- nav bar left side-->
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

            <!-- nav bar right side-->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-pills ms-auto text-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading1">Send Report Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading2">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading3">Accomplishments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading4">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading5">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="createAccount.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <button type="button" class="btn btn-outline-light">Login</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- START of nav bar content -->
    <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">

    <!-- Report crime now content-->
    <div id="scrollspyHeading1">
        <!-- send report now -->
        <section class="bg-dark">
            <div class="container text-center text-md-start">
                <div class="p-4">
                    <div class="row align-items-center">
                        <!-- 50% -->
                        <div class="col-12 col-md-7">
                            <h1 class="text-warning">Crime Reporting System</h1>
                            <p class="text-light">The official website of Municipal Police Station of Santa Cruz, Laguna</p>
                            <a class="btn btn-primary text-" href="login.php" role="button">SEND REPORT NOW</a>
                        </div>

                        <!-- 50% -->
                        <div class="col-12 col-md-5">
                            <img src="Images/send report.svg" class="img-fluid d-none d-md-block p-4 " alt="">
                        </div>
                    </div>
                </div> 
            </div>    
        </section>
    </div>
   
    <!-- Contact us content -->
    <div id="scrollspyHeading2">
        <!-- contact us -->
        <section class="aboutUs">
            <div class="container text-md-start">            
                <div class="p-4">                
                <div class="row align-items-center">                                
                    <!-- 50% -->
                    <div class="col-12 col-md-6">  
                        <h1 class="text-primary text-center text-md-start">Contact Us</h1>                                     
                        <ul class="list-group list-group-flush bg-light">
                            <li class="list-group-item"><b class="text-muted">Landline: </b> 
                                <a href="#">(049)-501-5971</a> 
                            </li>
                            <li class="list-group-item"><b class="text-muted">Globe Number: </b> 
                                <a href="#">0926-639-7747</a> 
                            </li>
                            <li class="list-group-item"><b class="text-muted">Smart Number: </b> 
                                <a href="#">0928-465-3820</a> 
                            </li>
                            <li class="list-group-item"><b class="text-muted">Facebook Page: </b> 
                                <a href="https://www.facebook.com/santacruzmps.lagunappo">Santa Cruz MPS Laguna</a> 
                            </li>
                            <li class="list-group-item"><b class="text-muted">Twitter Account: </b> 
                                <a href="https://twitter.com/stacruzmpslag?fbclid=IwAR2A5ppoOYNGVPiAqVnY4w9RFODb_9_TjhDxS14EJRyefzvvsRDJ12GtG4I">Santa Cruz MPS Laguna PPO</a>
                            </li>
                        </ul>
                    </div>

                    <!-- 50% -->
                    <div class="col-12 col-md-6">
                        <img src="Images/contact us.svg" class="img-fluid d-none d-md-block p-4" alt="">                   
                    </div>
                </div>
                </div>                        
            </div>
        </section>
    </div>
    
    <!-- Accomplishments content -->
    <div id="scrollspyHeading3">
        <!-- accomplishments -->
        <section class="bg-light">
            <div class="container">
                <!-- Title -->
                <div class="p-4">
                    <h1 class="text-center text-primary mb-3">Accomplishments</h1>
                    <div class="row g-2">
                        <!-- cards -->
                        <div class="col-12 col-md-4">
                            <div class="card" >
                                <img src="Images/tropy.svg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Accomplishment #1</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">See more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card" >
                                <img src="Images/tropy.svg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Accomplishment #2</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">See more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="card" >
                                <img src="Images/tropy.svg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Accomplishment #3</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>                                                            
            </div>
        </section>
    </div>

    <!-- Frequently ask questions content -->
    <div id="scrollspyHeading4">
        <!-- faq -->
        <section class="faq">
            <div class="container text-center text-md-start">
                <div class="p-4">                
                    <div class="row align-items-center">
                        <!-- 70% -->
                        <div class="col-12 col-md-8"> 
                        <h1 class="text-primary text-center mb-3">Frequently Ask Questions</h1>                   
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Question #1
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui, labore voluptatum, tenetur eaque laboriosam maiores tempore consequatur ipsum commodi ipsam minima et mollitia. Possimus quis repellendus fugit accusantium atque deserunt.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Question #2
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui, labore voluptatum, tenetur eaque laboriosam maiores tempore consequatur ipsum commodi ipsam minima et mollitia. Possimus quis repellendus fugit accusantium atque deserunt.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Question #3
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui, labore voluptatum, tenetur eaque laboriosam maiores tempore consequatur ipsum commodi ipsam minima et mollitia. Possimus quis repellendus fugit accusantium atque deserunt.</p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- 30% -->
                        <div class="col-12 col-md-4">
                            <img src="Images/faq.svg" class="img-fluid d-none d-md-block" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- About us content -->
    <div id="scrollspyHeading5">
        <!-- about us -->
        <section class="bg-light">
            <div class="container">
                <div class="p-4">
                    
                    <div class="row align-items-center">
                        <!-- 50% -->
                        <div class="col-12 col-md-3">
                            <img src="Images/PNP.png" class="img-fluid d-none d-md-block p-4" alt="">
                        </div>
                        <!-- 50% -->
                        <div class="col-12 col-md-9">  
                        <h1 class="text-primary text-center text-md-start ">About Us</h1>                      
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, et at tempora quod laborum veniam. Quas ex quidem, fuga a totam nesciunt sequi vel, nemo, quos eius necessitatibus minus illum!</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam nemo eos eligendi culpa soluta sed illum fugiat magnam delectus facilis molestias cumque, error itaque possimus debitis, obcaecati aperiam dolorum commodi ut laborum in dolores deleniti. Minima, beatae aliquid? Sapiente, aspernatur iure. Animi repellendus facilis ipsum sint. Amet atque, numquam hic obcaecati, animi incidunt molestias assumenda dolorum sunt ducimus quis deserunt nam nemo voluptates facilis iste harum! In sapiente a est ad enim nulla iusto consequatur, ipsa molestias assumenda, corporis provident quaerat vel magnam adipisci repellat officiis dolores rem velit. Magni exercitationem at ipsa. Ratione voluptatem, suscipit eos blanditiis qui fugiat.</p>
                        </div> 
                    </div>
                </div> 
            </div> 
        </section>                
    </div>
    <!-- END of nav bar content  -->
    

    <!-- START of arrow back to top -->
    <div class="container">
        <div class=" d-sm-flex justify-content-md-end py-2">
            <a class="btn btn-warning" href="#" id="arrowup" role="button">
                <img src="Icons/icon-arrowup.svg" class="img-fluid" alt="">
                Top
            </a>            
        </div>
    </div>    

    <script>
        var mybutton = document.getElementById("arrowup");
        window.onscroll = function(){
            scrollFunction()
        }

        function scrollFunction(){
            if(document.body.scroll > 100 || document.documentElement.scrollTop > 100){
                mybutton.style.display = "block";
            }
            else{
                mybutton.style.display="none";
            }
        }
    </script>
    <!-- END of arrow back to top -->

    
    
</div>
    
    
    
            
   
    
    
