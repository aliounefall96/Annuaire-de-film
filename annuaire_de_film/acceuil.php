<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">
</head>

<body>
    <!-- nav bar**************************************************** -->
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Communauté</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégorie
                    </a>
                    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">Série</a>
                        <a class="dropdown-item" href="#">Films</a>
                        <a class="dropdown-item" href="#">Mangas</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">Inscription <i class="fas fa-edit"></i></a>
                        <a class="dropdown-item" href="#">Se connecter <i class="fas fa-sign-in-alt"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
    <!-- nav bar**************************************************** -->
    <!-- ================slide========================= -->
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" alt="Second slide">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Third slide">
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    <!-- ==================slide====================== -->




    

    <!-- ===================card ============================== -->
    <div class="container">
        <h4 class="text-center py-4">Two equal columns layout</h4>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card default-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card primary-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(122).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

               <!-- Grid row -->
    </div>
    <div class="container">
        <h4 class="text-center py-4">Two equal columns layout</h4>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card default-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card primary-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(122).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

               <!-- Grid row -->
    </div>
    <div class="container">
        <h4 class="text-center py-4">Two equal columns layout</h4>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card default-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card primary-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(122).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

               <!-- Grid row -->
    </div>
    <div class="container">
        <h4 class="text-center py-4">Two equal columns layout</h4>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card default-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card primary-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(122).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

               <!-- Grid row -->
    </div>
    <div class="container">
        <h4 class="text-center py-4">Two equal columns layout</h4>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card default-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card primary-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(122).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

               <!-- Grid row -->
    </div><div class="container">
        <h4 class="text-center py-4">Two equal columns layout</h4>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card default-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card primary-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(122).jpg" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">News title</h4>
                        <!--Text-->
                        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

               <!-- Grid row -->
    </div>
    <!-- ===================card ============================== -->



    <!-- ========================footer ====================================== -->
    <!-- Footer -->
    <footer class="page-footer font-small indigo">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Liens Utiles</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">NETFLIX</a>
                        </li>
                        <li>
                            <a href="#!">ALLOCINE</a>
                        </li>
                        <li>
                            <a href="#!">PLAYVOD</a>
                        </li>
                        <li>
                            <a href="#!">YOUTUBE</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Services</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Publicité</a>
                        </li>
                        <li>
                            <a href="#!">Création contenu</a>
                        </li>
                        <li>
                            <a href="#!">Bandes annonces</a>
                        </li>
                        <li>
                            <a href="#!">Promotions</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">A propos</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Qui sommes-nous? </a>
                        </li>
                        <li>
                            <a href="#!">FAQ-Aide</a>
                        </li>
                        <li>
                            <a href="#!">Conditions d'utilisation</a>
                        </li>
                        <li>
                            <a href="#!">Conseils</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!"><i class="fas fa-map"></i> Sacre coeur 2 Villa 9343 VDN Dakar</a>
                        </li>
                        <li>
                            <a href="#!"><i class="fas fa-mobile"></i> +221 33 896 85 87</a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-facebook"></i> <i class="fab fa-twitter"></i> <i class="fab fa-whatsapp-square"></i> <i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#!" class="md-form">

                                <!-- <div > -->
                                <!-- <i class="fas fa-envelope prefix"></i> -->
                                <input type="text" id="inputIconEx1" class="form-control mt-0">
                                <label for="inputIconEx1">E-mail</label>
                                <!-- </div> -->
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> Annuaire.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!-- ========================footer ====================================== -->


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>
</body>

</html>