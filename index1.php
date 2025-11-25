<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Sistemas computacionales">
    <meta name="keywords" content="MySql, conexión, Wamp">
    <meta name="author" content="Ramirez Erik, Sistemas">

    <title>index</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <!-- ************  MENU  *************** -->
            <?php include('php/menu.php'); ?>
        </div>
        <!-- Header Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 bg-secondary d-none d-lg-block">
                    <a href=""
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 display-3 text-primary">LAS PODADORAS</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row bg-dark d-none d-lg-flex">
                        <div class="col-lg-7 text-left text-white">
                            <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                                <i class="fa fa-envelope text-primary mr-2"></i>
                                <small>info@example.com</small>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                                <i class="fa fa-phone-alt text-primary mr-2"></i>
                                <small>+012 345 6789</small>
                            </div>
                        </div>
                        <div class="col-lg-5 text-right">
                            <div class="d-inline-flex align-items-center pr-2">
                                <a class="text-primary p-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="text-primary p-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="text-primary p-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a class="text-primary p-2" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="text-primary p-2" href="">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                        <a href="" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 display-4 text-primary">Klean</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.html" class="nav-item nav-link active">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Service</a>
                                <a href="project.html" class="nav-item nav-link">Project</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="blog.html" class="dropdown-item">Latest Blog</a>
                                        <a href="single.html" class="dropdown-item">Blog Detail</a>
                                    </div>
                                </div>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <a href="" class="btn btn-primary mr-3 d-none d-lg-block">Get A Quote</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex align-items-center justify-content-center">
                            <div class="p-5" style="width: 100%; max-width: 900px;">
                                <h5 class="text-primary text-uppercase mb-md-3">Cleaning Services</h5>
                                <h1 class="display-3 text-white mb-md-4">Best Quality Solution In Cleaning</h1>
                                <a href="" class="btn btn-primary">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex align-items-center justify-content-center">
                            <div class="p-5" style="width: 100%; max-width: 900px;">
                                <h5 class="text-primary text-uppercase mb-md-3">Cleaning Services</h5>
                                <h1 class="display-3 text-white mb-md-4">Highly Professional Cleaning Services</h1>
                                <a href="" class="btn btn-primary">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
                        <div class="carousel-caption d-flex align-items-center justify-content-center">
                            <div class="p-5" style="width: 100%; max-width: 900px;">
                                <h5 class="text-primary text-uppercase mb-md-3">Cleaning Services</h5>
                                <h1 class="display-3 text-white mb-md-4">Experienced & Expert Cleaners</h1>
                                <a href="" class="btn btn-primary">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Contact Info Start -->
        <div class="container-fluid pb-5 contact-info">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div
                        class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                        <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                        <div class="">
                            <h5 class="mb-2">Our Office</h5>
                            <p class="m-0">123 Street, New York, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div
                        class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                        <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                        <div class="">
                            <h5 class="mb-2">Email Us</h5>
                            <p class="m-0">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div
                        class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                        <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                        <div class="">
                            <h5 class="mb-2">Call Us</h5>
                            <p class="m-0">+012 345 6789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Info End -->


        <!-- About Start -->
        <div class="container-fluid py-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div
                            class="d-flex flex-column align-items-center justify-content-center bg-about rounded h-100 py-5 px-3">
                            <i class="fa fa-5x fa-award text-primary mb-4"></i>
                            <h1 class="display-2 text-white mb-2" data-toggle="counter-up">25</h1>
                            <h2 class="text-white m-0">Years Experience</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 pt-5 pb-lg-5">
                        <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Learn About Us</h6>
                        <h1 class="mb-4 section-title">We Provide The Best Cleaning Services</h1>
                        <h5 class="text-muted font-weight-normal mb-3">Eos kasd eos dolor vero vero, lorem stet diam
                            rebum. Ipsum amet sed vero dolor sea lorem justo est dolor eos</h5>
                        <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                            ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum
                            est dolor</p>
                        <div class="d-flex align-items-center pt-4">
                            <a href="" class="btn btn-primary mr-5">Learn More</a>
                            <button type="button" class="btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                            <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Video Modal Start -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->


        <!-- =================== SERVICE HEADER =================== -->
        <div class="container-fluid bg-warning py-5">
            <div class="container d-flex align-items-center justify-content-between" style="min-height: 260px;">

                <!-- Texto SERVICE -->
                <h1 style="
            font-size: 80px;
            font-weight: bold;
            color: #118c2c;">
                    SERVICE
                </h1>

                <!-- Breadcrumb -->
                <div>
                    <a href="index.html" class="btn btn-outline-light rounded-pill px-4">Home</a>
                    <span class="text-white mx-2" style="font-size:20px;">»</span>
                    <a href="service.html" class="btn btn-outline-light rounded-pill px-4">Service</a>
                </div>

            </div>
        </div>
        <!-- ================= END SERVICE HEADER ================= -->


        <!-- HORARIOS Y OFERTAS START -->
        <div class="container-fluid py-5" style="background:#f8f9fa;">
            <div class="container">
                <div class="row">

                    <!-- Logo y Horarios -->
                    <div class="col-lg-4">
                        <div class="text-center mb-4">
                            <img src="img/logo.jpg" class="img-fluid" style="max-width:200px;">
                        </div>

                        <h3 class="text-primary mb-3">Horarios de atención</h3>
                        <p style="border: 2px dotted darkgreen; padding:15px; border-radius:10px;">
                            Lunes 9:15 am - 6:00 pm <br>
                            Martes 9:15 am - 5:00 pm <br>
                            Miércoles 9:15 am - 6:00 pm <br>
                            Jueves 9:15 am - 6:00 pm <br>
                            Viernes 9:15 am - 6:00 pm <br>
                            Sábado 9:15 am - 2:00 pm <br>
                            Domingo: Cerrado
                        </p>
                    </div>

                    <!-- Ofertas -->
                    <div class="col-lg-8">
                        <h2 class="text-center mb-4">🔥 OFERTAS DEL MES 🔥</h2>

                        <div class="text-center mb-3">
                            <img src="img/oferta.jpg" width="150px">
                        </div>

                        <p class="text-center" style="font-size:18px;">
                            <strong>¡APROVECHE LA OFERTA DEL MES!</strong>
                        </p>
                        <p class="text-center mb-4">
                            En la compra mínima de <strong>$100.00 pesos</strong>, la revisión de su máquina será
                            totalmente <strong>GRATIS</strong>.
                        </p>

                        <hr>

                        <!-- Producto -->
                        <h4 class="text-center text-secondary mb-3">Oferta para nuevos clientes</h4>
                        <p class="text-center mb-4">
                            En su primera compra obtenga un <strong>15% de descuento</strong> en una
                            <strong>Desbrozadora STIHL FS-38</strong>
                        </p>

                        <div class="card shadow p-3">
                            <div class="row align-items-center">

                                <div class="col-md-5 text-center">
                                    <img src="img/producto1.jpg" class="img-fluid" style="max-width:250px;">
                                </div>

                                <div class="col-md-7">
                                    <ul>
                                        <li><strong>Desbrozadora STIHL FS-38</strong></li>
                                        <li>
                                            <del>$3,300.00</del>
                                            <mark><strong>$3,165.00</strong></mark>
                                        </li>
                                        <li>
                                            <strong>Descripción:</strong>
                                            <em>
                                                La FS-38 es ideal para jardines pequeños. Es ligera (4.2 kg), fácil de
                                                usar y perfecta
                                                para recortar bordes y eliminar maleza en caminos y escaleras.
                                            </em>
                                        </li>
                                    </ul>

                                    <button class="btn btn-primary" onclick="agregar()">Agregar</button>
                                    <p id="agregar" class="mt-2 text-success"></p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- HORARIOS Y OFERTAS END -->

        <!-- Footer End -->
        <?php include("php/footer.php"); ?>

    </div>

</body>

</html>