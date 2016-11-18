<!DOCTYPE html>
<?php

session_start();

$link = mysqli_connect("127.0.0.1","cl49-aedes","Bm9W-sc4e","cl49-aedes");
if (mysqli_connect_error()){
    die("There was an error connecting to the database");
}
      $error = "";
    if(array_key_exists("submit-button", $_POST)){
       
       

    if ( !$_POST['usuario']){
        $error .= "<script type='text/javascript'>alert('Favor ingrese un Usuario');</script>;";
        
    }
    
    if( !$_POST['password']){
        
        $error .= "<script type='text/javascript'>alert('Favor ingrese una Contraseña');</script>;";
          
      }
        
    if ($error != ""){
            $error = "<p>Hay error(es) en el formulario:</p>".$error;
            
        }else{
            
              $query= "SELECT * FROM `users` WHERE name ='".mysqli_real_escape_string($link, $_POST['usuario'])."'";
        
                $result = mysqli_query($link, $query);
        
                $row = mysqli_fetch_array($result);
        
                if (isset($row)){
                    
                    $passw = $_POST['password'];
                    
                        if($passw == $row['pwd']){
                            $_SESSION['id'] = $row['id'];
                            
                            if ($_POST['PermanecerRegistrado'] == '1'){
                                
                                setcookie("id", $row['id'], time() + 60*60*24*7);
                            }
                            
                            header("Location: map.blade.php");
                            
                        }else{
                            $error .= "<script type='text/javascript'>alert('Usuario y/o Contraseña Inválido(s)');</script>;";
                        }
                }else{
                    $error .= "<script type='text/javascript'>alert('Usuario y/o Contraseña Inválido(s)');</script>;";
                }
        
                
    }
                
                

                    
}

?>

<meta charset="utf-8">

<html class="no-js" lang="">
<!--<![endif]-->

<!-- head -->

<head>

    <!-- Scripting -->
    <script src="landing/js/main.js"></script>
    <script src="bootstrap/js/vendor/bootstrap.min.js"></script>
    <script src="bootstrap/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="landing/css/main.css">
    <link rel="stylesheet" href="landing/css/navbar.css">
    <link rel="stylesheet" href="landing/css/jumbotron.css">
    <link rel="stylesheet" href="landing/css/social.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Josefin+Sans|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="landing/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="landing/css/font-awesome/css/font-awesome.css">


    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Aedes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<!-- End of Head -->

<!-- Body -->

<body>
    <!-- Background color -->
    <div class="backgroundGradient">
        <!-- Navbar -->
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
                
                    
                <!-- Container Sign Up -->
                <div class="container" id="containerSignup">
                    <ul class="nav navbar-nav navbar-right">
                        <li><form method="post"> 
                        <p class="labellogin">Usuario</p>
                        <input type="text" name="usuario" placeholder="usuario"></li>
                    
                        <li><p class="labellogin">Contraseña</p>
                    <input type="password" name="password" placeholder="contraseña"></li>  
                        
                         <li><button class="btn btn-success" id="signinButton" type="submit" name="submit-button" value="Ingresar">LogIn</button></li>
                        
                        <li> <input type="checkbox" name = "PermanecerRegistrado" value=1 id="recordarmeCheckBox">Recordarme</li>
            
                       
                        
                        <li id="invisible"><div id="error"> <?php echo $error; ?> </div></li>
                        
                        </form>
                        
                    </ul>
                </div>
                <!-- End of Container Signup -->
                </form>
            </div>
        </nav>
        <!-- End of Navbar -->
<div id="login-form">

    
   
    

</div>
        <!-- Main jumbotron  -->
        <div class="jumbotron">
            <!-- Container Jumbotron -->
            <div class="container" style="height: 60%;">
                <!-- Container Jumbo title -->
                <div class="container" id="jumboTitle">
                    <h1 class="jumboText">Aedes</h1>
                </div>
                <!-- End of Container Jumbo title -->
                <!-- Container of jumbo paragraph -->
                <div class="container" id="jumboP">
                    <h3 class="jumboText">Datos epidemiologicos sobre el dengue en Bello e Itagüí</h3>
                </div>
                <!-- End of jumbo paragraph -->
            </div>
        </div>
        <!-- End of Container Jumbotron -->
        <!-- End of Jumbotron -->

        <!-- Container Info -->
        <div class="container" id="containerInfo">
            <div class="row">
                <div class="col-md-4">
                    <img class="infoIcon" src="landing/img/virus.png">
                    <h2 class="infoTitle">
                      Lorem ipsum dolor
                    </h2>
                    <div class="m-y-2">
                        <!-- Text -->
                        <p class="infoText">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ullamcorper dolor. Curabitur tincidunt metus metus, sed vehicula ipsum interdum vel. Ut neque justo, viverra vel ante ac, viverra egestas orci. Nulla vel velit tristique, malesuada nunc
                            efficitur, viverra risus. Mauris sem est, varius vel odio eget, maximus congue est. Curabitur ac turpis nec eros porttitor fermentum a id nisl. Nullam blandit elit et accumsan feugiat. In hac habitasse platea dictumst.
                            <br> Nam posuere sit amet ex eget luctus. Mauris et sapien eget risus fermentum lacinia quis sit amet sem. Integer consectetur posuere urna vitae facilisis. Pellentesque laoreet elit sed purus condimentum commodo. Nullam dictum
                            elit id venenatis dignissim. Integer consequat odio ex, sit amet vulputate lorem gravida sit amet. Praesent felis magna, posuere sed sapien quis, finibus tempor odio. Etiam in scelerisque lorem, vitae iaculis ex.
                        </p>
                        <!-- End of text-->
                    </div>
                    <!-- End of column-->
                </div>
                <div class="col-md-4">
                    <img class="infoIcon" src="landing/img/hospital.png">
                    <h2 class="infoTitle">
                      Lorem ipsum dolor
                    </h2>
                    <div class="m-y-2">
                        <p class="infoText">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ullamcorper dolor. Curabitur tincidunt metus metus, sed vehicula ipsum interdum vel. Ut neque justo, viverra vel ante ac, viverra egestas orci. Nulla vel velit tristique, malesuada nunc
                            efficitur, viverra risus. Mauris sem est, varius vel odio eget, maximus congue est. Curabitur ac turpis nec eros porttitor fermentum a id nisl. Nullam blandit elit et accumsan feugiat. In hac habitasse platea dictumst.
                            <br> Nam posuere sit amet ex eget luctus. Mauris et sapien eget risus fermentum lacinia quis sit amet sem. Integer consectetur posuere urna vitae facilisis. Pellentesque laoreet elit sed purus condimentum commodo. Nullam dictum
                            elit id venenatis dignissim. Integer consequat odio ex, sit amet vulputate lorem gravida sit amet. Praesent felis magna, posuere sed sapien quis, finibus tempor odio. Etiam in scelerisque lorem, vitae iaculis ex.
                        </p>
                        <!-- End of text-->
                    </div>
                    <!-- End of column-->
                </div>
                <div class="col-md-4">
                    <img class="infoIcon" src="landing/img/mosquito.png">
                    <h2 class="infoTitle">
                      Lorem ipsum dolor
                    </h2>
                    <div class="m-y-2">
                        <p class="infoText">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ullamcorper dolor. Curabitur tincidunt metus metus, sed vehicula ipsum interdum vel. Ut neque justo, viverra vel ante ac, viverra egestas orci. Nulla vel velit tristique, malesuada nunc
                            efficitur, viverra risus. Mauris sem est, varius vel odio eget, maximus congue est. Curabitur ac turpis nec eros porttitor fermentum a id nisl. Nullam blandit elit et accumsan feugiat. In hac habitasse platea dictumst.
                            <br> Nam posuere sit amet ex eget luctus. Mauris et sapien eget risus fermentum lacinia quis sit amet sem. Integer consectetur posuere urna vitae facilisis. Pellentesque laoreet elit sed purus condimentum commodo. Nullam dictum
                            elit id venenatis dignissim. Integer consequat odio ex, sit amet vulputate lorem gravida sit amet. Praesent felis magna, posuere sed sapien quis, finibus tempor odio. Etiam in scelerisque lorem, vitae iaculis ex.
                        </p>
                        <!-- End of text-->
                    </div>
                    <!-- End of column-->
                </div>
                <!-- End of row -->
            </div>
        </div>
        <!-- End of container -->
        <hr>

        <div class="container-fluid">
          <div class="row">
            <div id="containerSocial" class="container">
              <div class="col-md-12">
                <div class="containerEafit">
                  <img class="infoIcon" id="logoEafit" src="landing/img/eafit.png">
                </div>
              </div>
              <div class="col-md-12">
                <div class="container" id="containerSocialButtons">
                  <div class="social-buttons">
                    <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-button google"><i class="fa fa-google"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
</body>

</html>
