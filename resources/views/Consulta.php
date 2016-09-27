<?php

if (array_key_exists('fechaInicial', $_POST)){
    
    $link = mysqli_connect("localhost","cl49-aedes","Bm9W-sc4e","cl49-aedes");

if (mysqli_connect_error()){

    die("There was an error connecting to the database");

    }

    
/*
    if ( $_POST['email'] == ''){
      echo "Please fill in a username";
        
    }else if( $_POST['password'] == ''){
          echo "Please fill in a password";
          
      }else{
      */
    
                                       // ('Paris','London');   $link,$name)."'";
    
    //SELECT * FROM `casos_dengue` where fechaInicial >= .fechaInicial. and fechaFinal <= fechaFinal. AND Sexo IN (M,F) AND Comuna IN(asd,asd,) 
    
    //ST["femenino"])."')";
    
    if ( $_POST['fechaInicial'] != ''){
        
        $query = "SELECT * FROM `casos_dengue` WHERE 
            Fecha >= '"
            .mysqli_real_escape_string($link, $_POST["fechaInicial"])."'
            AND Fecha <= '"
            .mysqli_real_escape_string($link, $_POST["fechaFinal"])."'
            AND Sexo IN ('"
            .mysqli_real_escape_string($link, $_POST["masculino"])."','"
            .mysqli_real_escape_string($link, $_POST["femenino"])."') 
            AND Comuna IN ('"
            .mysqli_real_escape_string($link, $_POST["Paris"])."','"
            .mysqli_real_escape_string($link, $_POST["La Madera"])."','"
            .mysqli_real_escape_string($link, $_POST["Suarez"])."','"
            .mysqli_real_escape_string($link, $_POST["La Cumbre"])."','"
            .mysqli_real_escape_string($link, $_POST["Bellavista"])."','"
            .mysqli_real_escape_string($link, $_POST["Mirador y Altos de Niquia"])."','"
            .mysqli_real_escape_string($link, $_POST["Niquia"])."','"
            .mysqli_real_escape_string($link, $_POST["Fontidueno"])."','"
            .mysqli_real_escape_string($link, $_POST["Acevedo"])."')
            AND Edad >= '"
            .mysqli_real_escape_string($link, $_POST["edadInicial"])."'
            AND Edad <= '"
            .mysqli_real_escape_string($link, $_POST["edadFinal"])."'";
    
        if ($result = mysqli_query($link,$query)){
             ?> 
        
                <table class="table table-striped table-inverse">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Género</th>
                        <th>Comuna</th>
                        <th>Edad</th>
                    
                    </tr>
                </thead>
        
            <?php while($row = mysqli_fetch_array($result)){ ?>
                  
                <tr>
                    <td><?php echo $row['Fecha']; ?></td>
                    <td><?php echo $row['Sexo']; ?></td>
                    <td><?php echo $row['Comuna']; ?></td>
                    <td><?php echo $row['Edad']; ?></td>
                </tr>
    
    <?php    }?>
                </table>
    <?php        
        }
   
    }
    
}


?>
<!--
<form method="post"> 
    
    <p>Fecha Inicio</p>
    <input type="date" name="dateStart">
    <p>Fecha Final</p>
    <input type="date" name="dateEnd">
    <p>Sexo</p>
    <input type="password" name="password">
    <input type="submit" value="Signup">
    

</form>
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
      
    <style type="text/css">
        
        
        
    </style>  
      
  </head>

    
<body>
    <div class="container">
        
    <h1>Pregunta al Mosquito</h1>
        
    <div id = 'error'>
    
    </div>    
        
    <div id="message"><? echo $error.$successMessage; ?></div>    
    
    <form method="post">
        <fieldset class="form-group">
             <div class="row">
                <div class="col-xs-3">
                    <label for="fechaInicial">Desde Cuando</label>
        
                    <input type="date" class="form-control" id="fechaInicial" name="fechaInicial">
                           
                </div>
                 
            </div>
        
        </fieldset>
           
        <fieldset class="form-group">
            <div class="row">
                <div class="col-xs-3">
                    <label for="fechaFinal">Hasta Cuando</label>
        
                    <input type="date" class="form-control" id="fechaFinal" name="fechaFinal">
                    
                </div>
                
            </div>
        
        </fieldset>
        
        <hr/>
          
        <p>Cual Género</p>
        <fieldset class="form-check">
            <label class="form-check-inline">
  
            <input class="form-check-input" type="checkbox" id="masculino" value="M" name="masculino"> M
           
            </label>
            
            <label class="form-check-inline">
           
            <input class="form-check-input" type="checkbox" id="femenino" value="F" name="femenino"> F
            
            </label>

        </fieldset>
        
        <hr/>
        
        <p>Cual(es) Comuna(s):</p>        
        <fieldset class="form-check">
            <label class="form-check-inline">
  
            <input class="form-check-input" type="checkbox" id="Paris" value="Paris"  name="Paris"> Paris
            </label>
            
            <label class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="La Madera" value="La Madera" name="La Madera">La Madera
            </label>
            
            <label class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="Santa Ana" value="Santa Ana" name="Santa Ana"> Santa Ana
            </label>
            
            <label class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="Suarez" value="Suarez" name="Suarez"> Suárez
            </label>
            
            <label class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="La Cumbre" value="La Cumbre" name="La Cumbre"> La Cumbre
            </label>
            
            <label class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="Bellavista" value="Bellavista" name="Bellavista"> Bellavista
            </label>
            
            <label class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="Mirador y Altos de Niquia" value="Mirador y Altos de Niquia" name="Mirador y Altos de Niquia"> Mirador y Altos de Niquía
            </label>
            
            <label class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="Niquia" value="Niquia" name="Niquia"> Niquia
            </label>
            
            <label class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="Fontidueno" value="Fontidueno" name="Fontidueno"> Fontidueño
            </label>
            
            <label class="form-check-inline">
            <input class="form-check-input" type="checkbox" id="Acevedo" value="Acevedo" name="Acevedo"> Acevedo
            </label>

        </fieldset>
          
        <hr/>
        
        <p>Cuales Edades</p>   
        
         <fieldset class="form-group">
             <div class="row">
                <div class="col-xs-1">
                    <label for="edadInicial">Edad Inicial</label>
        
                    <input type="text" class="form-control" id="edadInicial" name="edadInicial">
                            
                </div>
                
            </div>
        
        </fieldset>
        
        <fieldset class="form-group">
             <div class="row">
                <div class="col-xs-1">
                    <label for="edadFinal">Edad Final</label>
        
                    <input type="text" class="form-control" id="edadFinal" name="edadFinal">
                            
                </div>
                
            </div>
        
        </fieldset>
        
          <hr/>
        
         <button type="submit" id="submit" class="btn btn-primary">Go!</button>
        
    </form>
            
    </div>

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
      
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        /*
        $("form").submit(function (e){
            e.preventDefault();            
        
        var error="";
        
        if($("#subject").val() == ""){
            error += "Subject field is required<br>";
        
            
        }
            
        if($("#body").val() == ""){
            error += "Content field is required<br>";
        }
        $("#error").html(error);
        
        if(error == "" ){
            
        }   esle{
            
        } 
            
             });
        */
              
    </script>
    
</body>
    
</html>


