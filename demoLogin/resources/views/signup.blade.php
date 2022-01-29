<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Register Page</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.css/bootstrap.min.js')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('css/mdb.css/mdb.min.js')}}" rel="stylesheet">

  <style>

    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (min-width: 851px) and (max-width: 1440px) {
      html,
      body,
      header,
      .view {
        height: 850px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 1000px;
      }
    }

    @media (min-width: 451px) and (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1200px;
      }
    }

    @media (max-width: 450px) {
      html,
      body,
      header,
      .view {
        height: 1400px;
      }
    }

    .intro-2 {
      background: url("https://mdbootstrap.com/img/Photos/Others/forest1.jpg")no-repeat center center;
      background-size: cover;
    }

    .top-nav-collapse {
      background-color: #3f51b5 !important;
    }

    .navbar:not(.top-nav-collapse) {
      background: transparent !important;
    }

    @media (max-width: 768px) {
      .navbar:not(.top-nav-collapse) {
        background: #3f51b5 !important;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
            background: #3f51b5!important;
        }
    }

    .rgba-gradient {
      background: -webkit-linear-gradient(98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(22, 91, 231, 0.5)), color-stop(100%, rgba(255, 32, 32, 0.5)));
      background: linear-gradient(to top, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
    }

    .card {
      background-color: rgba(255, 255, 255, 0.85);
    }

    h6 {
      line-height: 1.7;
    }
  </style>

</head>

<body>

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <strong>MDB</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
          </ul>
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!--Intro Section-->
    <section class="view intro-2">
      <div class="mask rgba-gradient">
        <div class="container h-100 d-flex justify-content-center align-items-center">

          <!--Grid row-->
          <div class="row  pt-5 mt-3">

            <!--Grid column-->
            <div class="col-md-12">

              <div class="card">
                <div class="card-body" style="width: 450px">

                  <h2 class="font-weight-bold my-4 text-center mb-5 mt-4 font-weight-bold">
                    <strong>REGISTER</strong>
                  </h2>
                  <hr>

                  <!--Grid row-->
                  <div class="row mt-5">
                    <!--Grid column-->
                    <div class="col-md-12">
                      <!--Body-->
                      <form method="post" action="/didRegister">
                          {{@method_field('POST')}}
                      @csrf
                      <!-- start nếu xảy ra lỗi thì hiện thông báo: -->
                          <?php if(isset($_COOKIE["error"])){ ?>
                          <div class="alert alert-danger">
                              <strong>Error!</strong> <?php echo $_COOKIE["error"]; ?>
                          </div>
                            <?php } ?>
                      <!-- end nếu xảy ra lỗi thì hiện thông báo: -->
                      <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="username" class="form-control" name="username">
                        <label for="username">Username</label>
                      </div>
                      <div class="md-form">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="date" id="birthday" class="form-control" name="birthday">
                        <label for="birthday">Birthday</label>
                      </div>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix"></i>
                            <input type="text" id="address" class="form-control" name="address">
                            <label for="address">Address</label>
                        </div>

                      <div class="md-form">
                        <i class="fas fa-lock prefix"></i>
                        <input type="password" id="password" class="form-control" name="password">
                        <label for="password">Your password</label>
                      </div>

                        <div class="md-form">
                            <i class="fas fa-lock prefix"></i>
                            <input type="password" id="re-password" class="form-control" name="re-password">
                            <label for="re-password">re-password</label>
                        </div>

                      <div class="text-center">
                        <button class="btn btn-indigo btn-rounded mt-5">Sign up</button>
                      </div>
                      </form>

                    </div>
                    <!--Grid column-->

                  </div>
                  <!--Grid row-->

                </div>
              </div>

            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </div>
      </div>
    </section>
    <!--Intro Section-->

  </header>
  <!--Main Navigation-->

  <!--  SCRIPTS  -->
  <script type="text/javascript" src="{{asset('js/bootstrap.js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/popper.js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/mdb.js/mdb.min.js')}}"></script>
  <script>
    $(document).ready(() => {
      new WOW().init();
    });
  </script>
</body>

</html>
