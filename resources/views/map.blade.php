<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>main</title>
    <!-- scripting -->
    <script src="main/js/map.js"></script>
    <script src="bootstrap/js/vendor/bootstrap.min.js"></script>
    <script src="bootstrap/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!--stylesheets-->
    <link rel="stylesheet" href="main/css/main.css">
    <link rel="stylesheet" href="main/css/navbar.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

      <!--fonts & icons-->
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Josefin+Sans|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="main/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="main/css/font-awesome/css/font-awesome.css">
  </head>
  <body>

    <div class="backgroundGradient">


      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="col-md-3">
              <a class="navbar-brand" href="#" id="AedesBrand">Aedes</a>
            </div>
          </div>
          <div class="container" id="containerSignup">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#" class="signUpButton">Log-out <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="row">
        <div class="container">
          <div class="col-md-12">
            <h1 class="title"> Information map </h1>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="col-md-12">
              <h3 class="title">please upload a .csv excel file to update the map</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="container">
          <div class="col-md-12">
            <div id="map">

            </div>
          </div>
        </div>
      </div>

    </div>

  </body>
</html>
