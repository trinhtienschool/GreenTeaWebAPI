<!DOCTYPE html>
<html lang="en" class="">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Profile Page</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.css/mdb.min.css')}}" rel="stylesheet" type="text/css">

  <style>
    html,
    body,
    header,
    .jarallax {
      height: 700px;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .jarallax {
        height: 100vh;
      }
    }

     @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .jarallax {
        height: 100vh;
      }
    }

    @media (min-width: 560px) and (max-width: 660px) {
      header .jarallax h5 {
        display: none !important;
      }
    }

    .page-footer {
      margin-top: 0px;
      padding-top: 0px;
    }

  </style>

</head>

<body>

  <!--Main Navigation-->
  <header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar aqua-gradient">
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

    <!-- Intro Section -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient3.png); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-indigo-slight">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12 mb-3">
              <div class="intro-info-content text-center">
                <h1 class="display-3 blue-text mb-5 wow fadeInDown" data-wow-delay="0.3s">HELLO
                  <a class="blue-text font-weight-bold">WORLD</a>
                </h1>
                <h5 class="text-uppercase blue-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Get all account from database of Nguyen Le Thanh</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>
  <!--Main Navigation-->

  <!--Main Layout-->
  <main>

    <div class="container">

      <!--Section: Team v.1-->
      <section class="text-center team-section">

        <!--Grid row-->
        <div class="row text-center">

          <!--Grid column-->
          <div class="col-md-12 mb-4" style="margin-top: -100px;">

            <div class="avatar mx-auto">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="img-fluid rounded-circle z-depth-1"
                alt="First sample avatar image">
            </div>
            <h3 class="my-3 font-weight-bold">
              <strong>NGUYEN LE THANH</strong>
            </h3>
            <h6 class="font-weight-bold teal-text mb-4">LIST ACCOUNTS</h6>


              <!--list account-->
              <?php if(isset($_COOKIE['wasLogin'])) { ?>
           <ol>
               @foreach($accounts As $key => $value)

                   <li value="{{$value->id}}">Name:{{$value->name}}<br/>
                                              Birthday:

                        @if($value->birthday!=null)
                           {{Illuminate\Support\Carbon::createFromFormat('Y-m-d',$value->birthday)->format('d/m/Y')}}
                       @else none
                       @endif
                         <br/>
                                              Address:{{$value->address}}</li>

                   <hr/>
               @endforeach
           </ol>
              <?php } else { ?>
                  <div style="background-color: #00c851;font-size: 5rem;">You need login to read!</div>
              <?php } ?>
            <p class="mt-5">Thank you for watching!</p>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Team v.1-->
    </div>

  </main>
  <!--Main Layout-->

  <!--Footer-->
  <footer class="page-footer mdb-color lighten-3 text-center text-md-left">

    <!--Footer Links-->
    <div class="container">

      <!--First row-->
      <div class="row">
        <div class="col-md-12">

          <h5 class="my-5 d-flex justify-content-center">If you want to cooperate with me just send me a message at
            office@mdbootstrap.com</h5>
        </div>
      </div>
      <!--/First row-->
    </div>
    <!--/Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright text-center py-3 wow fadeIn" data-wow-delay="0.3s">
      <div class="container-fluid">
        &copy; 2019 Copyright:
        <a href="https://mdbootstrap.com/docs/jquery/"> MDBootstrap.com </a>
      </div>
    </div>
    <!--/Copyright-->

  </footer>
  <!--/Footer-->

  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('js/bootstrap.js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/popper.js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/mdb.js/mdb.min.js')}}"></script>
  <script>
    $(document).ready(() => {
      new WOW().init();
    });

    // MDB Lightbox Init
    $(function () {
      $("#mdb-lightbox-ui").load("{{asset('mdb-addons/mdb-lightbox-ui.blade.php')}}");
    });

  </script>
</body>

</html>
