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

    {{--COMPONENTE--}}
    @component('components.navbar_pages')
    @endcomponent


    {{--CONTEUDO--}}
    <section class="section section-components pb-0" id="section-components">
        <div class="container">

            @yield('conteudo')

        </div>
    </section>


  {{--FOOTER--}}
  <footer>
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