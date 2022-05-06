<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <?php include_once('headerLogin.php'); ?>

   

</head>
<body>
  
    <div id="carouselExampleCaptions" class="carousel slide bg-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner p-3">
            <div class="carousel-item active">
            <img src="Images/tropy.svg" class=" d-block w-100" height="400"  alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="Images/tropy.svg" class=" d-block w-100" height="400" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="Images/tropy.svg" class=" d-block w-100" height="400" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container my-5">
        <div class="row mx-auto">
            <div class="col-12 col-md-8">
                <h1 class="mb-3">Crime Reporting of Santa Cruz Laguna</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium ut accusamus eaque? Est porro fuga aspernatur? Voluptatum ipsa reprehenderit iure non totam! Expedita, maiores modi eum nihil nam voluptatibus beatae excepturi ipsa deserunt ullam accusantium dolorem vel omnis adipisci, nemo esse quisquam doloribus reprehenderit.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores iste repellendus necessitatibus eaque cum, dicta explicabo accusamus quo laudantium, reiciendis praesentium aliquam minima itaque, quibusdam tempore facilis veniam? Adipisci minima mollitia, nostrum quasi, nulla incidunt maxime accusamus accusantium voluptates explicabo sequi asperiores illo quis eius officia vel quas voluptatibus nobis quaerat ullam minus reiciendis enim. Ducimus odit ipsa qui delectus neque sint amet </p>
            </div>

            <div class="col col-md-4">
                <img src="Images/mailbox.svg" class="img-fluid mx-auto d-none d-md-block p-3"  alt="">
            </div>

        </div>
    </div>


<?php include_once('footer.php'); ?>
   
    
</body>
</html>