<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BootStrap 4 CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Local Files -->
    <link href="<?php echo get_template_directory_uri() . './css/mainStyle.css' ?>" rel="stylesheet" />
    <script src="<?php echo get_template_directory_uri() . './js/script.js' ?>"></script>

    <title>WordPress Theme Development with Custom Table</title>
</head>
<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
        </div>
    </nav><!-- end nav -->

    <div class="container bodyHeight">
        <h1>WordPress Plugin Development with Custom Table </h1>

        <!-- Cards -->
        <div class="row">

            <!-- card 1-->
            <div class="col-md-4">
                    <div class="card" >
                        <img class="card-img-top" src="<?php echo get_template_directory_uri() . '/images/IMG_4707.JPG' ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">McLaren</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quod vero doloremque quas? Dolores sed explicabo sapiente a alias impedit.</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div><!--End card -->
            </div> <!-- End Col-->

            <!-- card 2-->
            <div class="col-md-4">
                <div class="card" >
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . './images/IMG_4708.JPG' ?>" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Mini Cooper</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quod vero doloremque quas? Dolores sed explicabo sapiente a alias impedit.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div><!--End card -->
            </div> <!-- End Col-->

            <!-- card 3-->
            <div class="col-md-4">
                <div class="card" >
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . './images/IMG_4717.JPG' ?>"  alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Lamborghini</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quod vero doloremque quas? Dolores sed explicabo sapiente a alias impedit.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div><!--End card -->
            </div> <!-- End Col-->

            <!-- card 4-->
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . './images/IMG_4919.JPG' ?>" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Covertte</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quod vero doloremque quas? Dolores sed explicabo sapiente a alias impedit.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div><!--End card -->
            </div> <!-- End Col-->

            <!-- card 5-->
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . './images/IMG_5537.JPG' ?>" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Holden Corolado</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quod vero doloremque quas? Dolores sed explicabo sapiente a alias impedit.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div><!--End card -->
            </div> <!-- End Col-->

            <!-- card 6 -->
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . './images/IMG_5555.JPG' ?>" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Range Rover Discovery</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quod vero doloremque quas? Dolores sed explicabo sapiente a alias impedit.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div><!--End card -->
            </div> <!-- End Col-->

            <!-- card 7-->
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . './images/IMG_4972.JPG' ?>" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Monster Track</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quod vero doloremque quas? Dolores sed explicabo sapiente a alias impedit.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div><!--End card -->
            </div> <!-- End Col-->

            <!-- card 8-->
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . './images/IMG_4714.JPG' ?>" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Ducati</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quod vero doloremque quas? Dolores sed explicabo sapiente a alias impedit.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div><!--End card -->
            </div> <!-- End Col-->

            <!-- card 9-->
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri() . './images/IMG_5511.JPG' ?>" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Yamaha YZF R3</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quod vero doloremque quas? Dolores sed explicabo sapiente a alias impedit.</p>
                        <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                </div><!--End card -->
            </div> <!-- End Col-->


        </div><!-- End row -->
    </div><!-- End Container -->

    <!-- Footer -->
    <div class="container-fluid bg-primary footer-container">
        <div class="row">
            <div class="col footer-copyright">
                <span>
                    Copyright: 2021. All rights reserved. 
                </span>
            </div>
        </div>
    </div>
        



</body>
</html>