<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>{{$title}}</title>
  <!-- Favicon -->
  <link href="{{url('templete/assets/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{url('templete/assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{url('templete/assets/img/brand/favicon.png')}}" rel="stylesheet">
  <link href="{{url('templete/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- Argon CSS -->
  <link type="text/css" href="{{url('templete/assets/css/argon.css?v=1.0.1')}}" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="{{url('templete/assets/css/docs.min.css')}}" rel="stylesheet">
</head>

<body>

    <div class="position-relative">
      <section class="section section-lg section-hero section-shaped">

          <!-- Background circles -->
        <div class="shape shape-style-1 shape-primary">
          <span class="span-150"></span>
          <span class="span-50"></span>
          <span class="span-50"></span>
          <span class="span-75"></span>
          <span class="span-100"></span>
          <span class="span-75"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
        </div>

          <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <img src="{{url('templete/assets/img/brand/nasa.png')}}" class="img-fluid">
                <p class="lead text-white">CRUD LARAVEL</p>
                <div class="btn-wrapper mt-5">
                  <a href="https://github.com/gabriel-roque/crud-laravel" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0" target="_blank">
                    <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                    <span class="btn-inner--text">Download Project</span>
                  </a>
                  <a href="https://github.com/gabriel-roque" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" target="_blank">
                    <span class="btn-inner--icon"><i class="fab fa-github"></i></span>
                    <span class="btn-inner--text">
                      <span class="text-warning">Star us</span> on Github</span>
                  </a>
                </div>
                <div class="mt-5">
                  <small class="text-white font-weight-bold mb-0 mr-2">MADE FOR GABRIEL. RMS</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew zindex-100">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
    </div>

    {{--CONTEUDO--}}
    <section class="section section-components pb-0" id="section-components">
        <div class="container">

            @yield('conteudo')

        </div>
    </section>



  <footer class="footer has-cards">
    <div class="container">
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy;
              <script>
                  var d = new Date();
                  var n = d.getFullYear();
                  document.write(n);
              </script>
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Core -->
  <script src="{{url('templete/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('templete/assets/vendor/popper/popper.min.js')}}"></script>
  <script src="{{url('templete/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{url('templete/assets/vendor/headroom/headroom.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{url('templete/assets/vendor/onscreen/onscreen.min.js')}}"></script>
  <script src="{{url('templete/assets/vendor/nouislider/js/nouislider.min.js')}}"></script>
  <script src="{{url('templete/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{url('templete/assets/js/argon.js?v=1.0.1')}}"></script>

</body>
</html>