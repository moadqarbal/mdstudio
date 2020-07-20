<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MD Phoenix</title>

    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/imagehover.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- header -->
    <header class="m-fixed-nav">
        <nav class="navbar navbar-expand-lg navbar fixed-top py-3 navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                A propos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Albums
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Nos Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto social-media-navbar">
                        <li class="nav-item mx-1">
                            <a class="nav-link" target="_blank" href="https://www.facebook.com/moadthemes/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" target="_blank" href="http://www.instagram.com">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" target="_blank" href="https://wa.me/212656360919">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" target="_blank" href="mailto:mo3ad@gmail.com?subject=Welcome">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" target="_blank" href="http://www.linkedin.com">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- album section -->
    <section class="contact-page py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center py-3 mb-5">
                    <h1 class="text-uppercase d-inline">
                        Contact
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row  mt-2">
                        <div class="col-md-12">
                            <form method="post" id="myForm">
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <label for="name">Nom et Prenom</label>
                                        <input type="text" required id="name" name="fullname" placeholder="Nom et Prenom" class="form-control no-raduis">
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <label for="email">Email</label>
                                        <input type="email" required id="email" name="email" placeholder="Email" class="form-control no-raduis">
                                    </div>
                                    <div class="col-lg-12 my-4">
                                        <label for="message">Message</label>
                                        <textarea name="message" required minlength="4" id="message" class="form-control no-raduis" placeholder="Message" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-lg-4 my-2">
                                        <button type="submit" name="send" class="form-control no-raduis btn btn-outline-dark">
                                            <i class="fas fa-paper-plane"></i> Envoyer
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map mt-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13296.36267747183!2d-7.624061221929626!3d33.57699504180419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda632cf9f46a401%3A0xbf637c322b375b3f!2sBen+M&#39;Sick%2C+Casablanca!5e0!3m2!1sen!2sma!4v1535814318657"
                            height="450" frameborder="0" style="border:0;width: 100%;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- footer section -->
    <footer class="footer bg-dark text-white py-5 ">
        <div class="container ">
            <div class="row mt-4 ">
                <div class="col text-center ">
                    <h2 class="pb-4 ">
                        <a class="font-weight-bold " href="# ">
                            <img src="img/logo-white.png " class="footer-logo " alt="logo ">
                        </a>
                    </h2>
                    <p class="text-footer ">
                        <i class="fas mr-1 fa-map-marker "></i> Adresse exemple Adresse exemple </p>
                    <p class="text-footer ">
                        <i class="fas mr-1 fa-envelope "></i> <a href="mailto:info@example.com ">info@example.com</a> </p>
                    <p class="text-footer ">
                        <i class="fas mr-1 fa-phone "></i> +212 000000000
                    </p>

                    <div class="footer-social-media my-5 ">
                        <a href="# " class="text-white mx-2 ">
                            <i class="fab fa-facebook fa-3x "></i>
                        </a>
                        <a href="# " class="text-white mx-2 ">
                            <i class="fab fa-instagram fa-3x "></i>
                        </a>
                        <a href="# " class="text-white mx-2 ">
                            <i class="fab fa-pinterest-square fa-3x "></i>
                        </a>
                        <a href="# " class="text-white mx-2 ">
                            <i class="fab fa-twitter-square fa-3x "></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <script src="js/jquery.min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/wow.min.js "></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/lightbox.js "></script>
    <script src="js/html5shiv.min.js "></script>
</body>

</html>