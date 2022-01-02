<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<!--Navigation & Intro-->
<header>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <strong>Navbar</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--Links-->
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" data-offset="100">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#info" data-offset="100">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses" data-offset="100">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#events" data-offset="100">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials" data-offset="100">Opinions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#modal-contact">Contact</a>
                    </li>
                </ul>

                <!--Social Icons-->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar-->

    <!-- Intro Section -->
    <x-hero :name="'Đại học Nông Lâm'" :description="'Trường Đại học Nông Lâm thành phố Hồ Chí Minh là một trường đại học đa ngành tại Việt Nam, chuyên đào tạo và nghiên cứu nhóm ngành nông – lâm – ngư nghiệp. Trường trực thuộc Bộ Giáo dục và Đào tạo.'"></x-hero>


</header>
<!--Navigation & Intro-->

<!--Main content-->
<main>

    <div class="container">

        <x-about :des1="'Trường Đại học Nông Lâm thành phố Hồ Chí Minh là một trường đại học đa ngành tại Việt Nam, chuyên đào tạo và nghiên cứu nhóm ngành nông – lâm – ngư nghiệp. Trường trực thuộc Bộ Giáo dục và Đào tạo.'"
        :des2="'Trường được thành lập trên cơ sở Trường Quốc gia Nông Lâm Mục Bảo Lộc được thành lập từ năm 1955. Trong quá trình phát triển, trường từng sáp nhập vào hệ thống Đại học Quốc gia nhưng sau đó tách và nhập vào Bộ Giáo dục và Đào tạo cho đến ngày nay.'"></x-about>

        <hr>

        <x-organization-issues></x-organization-issues>

    </div>

    <!--Streak-->
    <div class="streak streak-photo streak-md"
         style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full%20page/img%20%287%29.jpg');">
        <div class="flex-center mask rgba-indigo-strong">
            <div class="text-center white-text">
                <h2 class="h2-responsive mb-5">
                    <i class="fas fa-quote-left" aria-hidden="true"></i> Creativity requires the courage to let go of
                    certainties
                    <i class="fas fa-quote-right" aria-hidden="true"></i>
                </h2>
                <h5 class="text-center font-italic " data-wow-delay="0.2s">~ Erich Fromm</h5>
            </div>
        </div>
    </div>
    <!--Streak-->


    <x-faculty></x-faculty>

    <div class="container">

        <section id="testimonials" class="mb-5">

            <!--Section heading-->
            <h2 class="text-center mb-5 my-5 pt-5 pb-4 font-weight-bold wow fadeIn" data-wow-delay="0.2s">What Students
                said:</h2>

            <div class="row">

                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn"
                     data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="prev">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a class="btn-floating light-blue darken-4" href="#multi-item-example" data-slide="next">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                    <!--Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example" data-slide-to="0" class="active light-blue darken-4"></li>
                        <li data-target="#multi-item-example" data-slide-to="1" class="light-blue darken-4"></li>
                        <li data-target="#multi-item-example" data-slide-to="2" class="light-blue darken-4"></li>
                    </ol>
                    <!--Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner text-center" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">
                            <!--Grid column-->
                            <div class="col-md-4">

                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
                                             class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold">Anna Deynah</h4>

                                    <p>
                                        <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                                        eos id officiis
                                        hic tenetur.</p>

                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star-half-alt"> </i>
                                    </div>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
                                             class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold">John Doe</h4>

                                    <p>
                                        <i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                        corporis suscipit
                                        laboriosam.
                                    </p>

                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                                             class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold">Abbey Clark</h4>

                                    <p>
                                        <i class="fas fa-quote-left"></i> Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                                        esse quam
                                        nihil molestiae.</p>

                                    <!--Review-->
                                    <div class="grey-text mb-3s">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="far fa-star"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            <!--Grid column-->
                            <div class="col-md-4">

                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(4).jpg"
                                             class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold">Blake Dabney</h4>

                                    <p>
                                        <i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                        corporis laboriosam.</p>

                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star-half-alt"> </i>
                                    </div>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(6).jpg"
                                             class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold">Andrea Clay</h4>

                                    <p>
                                        <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                                        eos id officiis
                                        hic tenetur quae.</p>

                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(7).jpg"
                                             class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold">Cami Gosse</h4>

                                    <p>
                                        <i class="fas fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                        blanditiis
                                        praesentium.
                                    </p>

                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="far fa-star"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">
                            <!--Grid column-->
                            <div class="col-md-4">

                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg"
                                             class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold">Bobby Haley</h4>

                                    <p>
                                        <i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                                        eos id officiis
                                        hic tenetur quae.</p>

                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                    </div>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
                                             class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold">Elisa Janson</h4>

                                    <p>
                                        <i class="fas fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                        blanditiis
                                        praesentium.
                                    </p>

                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star-half-alt"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-sm-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto mb-4">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
                                             class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold">Robert Jacobs</h4>

                                    <p>
                                        <i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                        corporis laboriosam.</p>

                                    <!--Review-->
                                    <div class="grey-text">
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="fas fa-star"> </i>
                                        <i class="far fa-star"> </i>
                                    </div>
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Third slide-->

                    </div>
                    <!--Slides-->

                </div>
                <!--Carousel Wrapper-->

            </div>

        </section>

    </div>

</main>
<!--Main content-->

<!--Footer-->
<footer class="page-footer text-center text-md-left mdb-color darken-3">

    <!--Footer Links-->
    <div class="container-fluid">

        <!--First row-->
        <div class="row " data-wow-delay="0.2s">

            <!--First column-->
            <div class="col-md-12 text-center mb-3 mt-3">

                <!--Icon-->
                <i class="fas fa-graduation-cap fa-4x orange-text"></i>
                <!--Title-->
                <h2 class="mt-3 mb-3">Join Us</h2>
                <!--Description-->
                <p class="white-text mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et
                    dolore magna aliqua.</p>
                <!--Reservation button-->
                <a href="#!" class="btn btn-warning">Appliction</a>
                <a href="#!" class="btn btn-info">Contact</a>

            </div>
            <!--First column-->

            <hr class="w-100 mt-4 mb-5">

        </div>
        <!--First row-->

        <div class="container mb-1">

            <!--Second row-->
            <div class="row">

                <!--First column-->
                <div class="col-xl-4 col-lg-4 pt-1 pb-1">
                    <!--About-->
                    <h5 class="text-uppercase mb-3 font-weight-bold">ABOUT MATERIAL DESIGN</h5>

                    <p>Material Design (codenamed Quantum Paper) is a design language developed by Google.</p>

                    <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS,
                        and JS framework - Bootstrap.</p>
                    <!--About-->

                    <div class="footer-socials mt-4">

                        <!--Facebook-->
                        <a type="button" class="btn-floating btn-blue-2 ">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <!--Dribbble-->
                        <a type="button" class="btn-floating btn-blue-2 ">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <!--Twitter-->
                        <a type="button" class="btn-floating btn-blue-2 ">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <!--Google +-->
                        <a type="button" class="btn-floating btn-blue-2 ">
                            <i class="fab fa-google-plus-g"></i>
                        </a>

                    </div>
                </div>
                <!--First column-->

                <hr class="w-100 clearfix d-lg-none">

                <!--Second column-->
                <div class="col-xl-3 ml-lg-auto col-lg-4 col-md-6 mt-1 mb-1">
                    <!--Search-->
                    <h5 class="text-uppercase mb-3 font-weight-bold">Search something</h5>

                    <ul class="footer-search list-unstyled">
                        <li>
                            <form class="search-form" role="search">
                                <div class="md-form">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </li>
                    </ul>

                    <!--Info-->
                    <p>
                        <i class="fas fa-home pr-1"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope pr-1"></i> info@example.com</p>
                    <p>
                        <i class="fas fa-phone pr-1"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print pr-1"></i> + 01 234 567 89</p>

                </div>
                <!--Second column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Third column-->
                <div class="col-xl-3 ml-lg-auto col-lg-4 col-md-6 mt-1 mb-1">
                    <!--Contact-->
                    <h5 class="text-uppercase mb-3 font-weight-bold">Recent news</h5>

                    <ul class="footer-posts list-unstyled">
                        <li>
                            <a>Ut enim ad minim veniam nostrud.</a>
                            <span>
                  <p class="grey-text">28 july 2016</p>
                </span>
                        </li>
                        <li>
                            <a>Duis aute dolor in reprehenderit.</a>
                            <span>
                  <p class="grey-text">27 july 2016</p>
                </span>
                        </li>
                        <li>
                            <a>Excepteur sint occaecat cupidatat.</a>
                            <span>
                  <p class="grey-text">26 july 2016</p>
                </span>
                        </li>
                        <li>
                            <a>Sed perspiciatis unde omnis iste.</a>
                            <span>
                  <p class="grey-text">25 july 2016</p>
                </span>
                        </li>
                    </ul>

                </div>
                <!--Third column-->

            </div>
            <!--Second row-->

        </div>

    </div>
    <!--Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
        </div>
    </div>
    <!--Copyright-->

</footer>
<!--Footer-->


<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Your custom scripts -->
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

