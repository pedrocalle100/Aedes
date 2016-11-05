<?php

$link = mysqli_connect("127.0.0.1","cl49-aedes","Bm9W-sc4e","cl49-aedes");

if (mysqli_connect_error()){

    die("There was an error connecting to the database");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>main</title>
    <!-- scripting -->
    <!--<script src="main/js/maptooltip.js"></script>-->
    <script src="bootstrap/js/vendor/bootstrap.min.js"></script>
    <script src="bootstrap/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.25.1/mapbox-gl.js'></script>
    <!--stylesheets-->
    <link rel="stylesheet" href="main/css/main.css">
    <link rel="stylesheet" href="main/css/button.css">
    <link rel="stylesheet" href="main/css/map.css">
    <link rel="stylesheet" href="main/css/navbar.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.25.1/mapbox-gl.css' rel='stylesheet' />

      <!--fonts & icons-->
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Josefin+Sans|Raleway|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="main/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="main/css/font-awesome/css/font-awesome.css">
  </head>
  <body>

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
          <div class="container" id="containerSignup">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#" class="signUpButton">Log-out <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End of Navbar -->

      <!--Instructions -->
      <div class="row">
        <div class="container">
          <div class="col-md-12">
            <h1 class="title"><img src="main/img/mosquito.png" alt="logo" style="width:10%","height:10%"/></i></h1>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <h1 class="title"> Information map </h1>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="col-md-12">
              <h4 class="title">Please upload a .csv excel file to update the map Hola mundo</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Instructions -->

      <br>

    <style>
    .mapboxgl-popup {
        max-width: 400px;
        font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }
    </style>
    <div id='map'></div>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoicGNhbGxlaiIsImEiOiJjaXUyeXVzZncwaHJxMnlvMTQ5aDUydHdnIn0.YUt_W4yQduMhunMDUMkGgw';

    var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/pcallej/ciu4udg6h00cv2ilfny4lp7jw',
      //center: [-77.04, 38.907],
      //zoom: 11.15
    });

    map.on('load', function () {
      // Add a GeoJSON source containing place coordinates and information.
      map.addSource('Paris', {
'type': 'geojson',
'data': {
'type': 'Feature',
'geometry': {
'type': 'Polygon',
'coordinates': [[
        [
          -75.573124,
          6.313803
        ],
        [
          -75.573155,
          6.313451
        ],
        [
          -75.573008,
          6.31318
        ],
        [
          -75.572857,
          6.312914
        ],
        [
          -75.572631,
          6.312504
        ],
        [
          -75.572459,
          6.312203
        ],
        [
          -75.572093,
          6.311561
        ],
        [
          -75.571996,
          6.311195
        ],
        [
          -75.572018,
          6.310889
        ],
        [
          -75.572207,
          6.310739
        ],
        [
          -75.572466,
          6.310678
        ],
        [
          -75.572813,
          6.310636
        ],
        [
          -75.573082,
          6.310708
        ],
        [
          -75.573484,
          6.310779
        ],
        [
          -75.573915,
          6.310703
        ],
        [
          -75.574318,
          6.310731
        ],
        [
          -75.574768,
          6.310797
        ],
        [
          -75.57503,
          6.310792
        ],
        [
          -75.575303,
          6.310827
        ],
        [
          -75.575662,
          6.310947
        ],
        [
          -75.576188,
          6.311113
        ],
        [
          -75.576554,
          6.311171
        ],
        [
          -75.576724,
          6.310967
        ],
        [
          -75.576969,
          6.310774
        ],
        [
          -75.577257,
          6.310735
        ],
        [
          -75.577577,
          6.310693
        ],
        [
          -75.577885,
          6.310512
        ],
        [
          -75.578202,
          6.310453
        ],
        [
          -75.578495,
          6.310386
        ],
        [
          -75.578737,
          6.310392
        ],
        [
          -75.579022,
          6.310154
        ],
        [
          -75.579339,
          6.309995
        ],
        [
          -75.579628,
          6.309848
        ],
        [
          -75.579946,
          6.309746
        ],
        [
          -75.580165,
          6.309631
        ],
        [
          -75.580489,
          6.309519
        ],
        [
          -75.58077,
          6.309356
        ],
        [
          -75.581807,
          6.308981
        ],
        [
          -75.582207,
          6.309101
        ],
        [
          -75.582502,
          6.309255
        ],
        [
          -75.582781,
          6.309335
        ],
        [
          -75.583022,
          6.309365
        ],
        [
          -75.583472,
          6.309232
        ],
        [
          -75.583791,
          6.309265
        ],
        [
          -75.584077,
          6.309225
        ],
        [
          -75.584351,
          6.309287
        ],
        [
          -75.584643,
          6.309268
        ],
        [
          -75.585044,
          6.309371
        ],
        [
          -75.585355,
          6.309664
        ],
        [
          -75.585615,
          6.309788
        ],
        [
          -75.585966,
          6.309928
        ],
        [
          -75.586269,
          6.31002
        ],
        [
          -75.58661,
          6.309999
        ],
        [
          -75.586927,
          6.309978
        ],
        [
          -75.587196,
          6.310011
        ],
        [
          -75.587474,
          6.309972
        ],
        [
          -75.587714,
          6.309805
        ],
        [
          -75.588013,
          6.309755
        ],
        [
          -75.58831,
          6.309696
        ],
        [
          -75.588627,
          6.30957
        ],
        [
          -75.588971,
          6.309385
        ],
        [
          -75.589227,
          6.309196
        ],
        [
          -75.589493,
          6.309111
        ],
        [
          -75.589496,
          6.309459
        ],
        [
          -75.589223,
          6.30978
        ],
        [
          -75.589087,
          6.309998
        ],
        [
          -75.589087,
          6.310234
        ],
        [
          -75.589155,
          6.3105
        ],
        [
          -75.589092,
          6.310763
        ],
        [
          -75.588999,
          6.310976
        ],
        [
          -75.589147,
          6.311158
        ],
        [
          -75.589108,
          6.311438
        ],
        [
          -75.588929,
          6.311651
        ],
        [
          -75.588836,
          6.311956
        ],
        [
          -75.588711,
          6.312309
        ],
        [
          -75.588333,
          6.31249
        ],
        [
          -75.587991,
          6.312598
        ],
        [
          -75.587753,
          6.3127
        ],
        [
          -75.587643,
          6.313094
        ],
        [
          -75.587877,
          6.313287
        ],
        [
          -75.588104,
          6.313366
        ],
        [
          -75.588297,
          6.313596
        ],
        [
          -75.588604,
          6.3137
        ],
        [
          -75.588741,
          6.314077
        ],
        [
          -75.58872,
          6.314423
        ],
        [
          -75.588712,
          6.31471
        ],
        [
          -75.5887,
          6.315036
        ],
        [
          -75.58863,
          6.31533
        ],
        [
          -75.589011,
          6.315614
        ],
        [
          -75.589045,
          6.315982
        ],
        [
          -75.58935,
          6.316253
        ],
        [
          -75.589555,
          6.31654
        ],
        [
          -75.589737,
          6.316846
        ],
        [
          -75.590099,
          6.317083
        ],
        [
          -75.590382,
          6.3173
        ],
        [
          -75.590508,
          6.31755
        ],
        [
          -75.590803,
          6.317794
        ],
        [
          -75.590524,
          6.317913
        ],
        [
          -75.590212,
          6.317924
        ],
        [
          -75.589825,
          6.317884
        ],
        [
          -75.589566,
          6.317582
        ],
        [
          -75.589235,
          6.317431
        ],
        [
          -75.588927,
          6.31743
        ],
        [
          -75.588565,
          6.317413
        ],
        [
          -75.588278,
          6.317381
        ],
        [
          -75.588055,
          6.317524
        ],
        [
          -75.587659,
          6.317553
        ],
        [
          -75.587284,
          6.31751
        ],
        [
          -75.586946,
          6.31736
        ],
        [
          -75.586643,
          6.31717
        ],
        [
          -75.586356,
          6.317281
        ],
        [
          -75.585941,
          6.317342
        ],
        [
          -75.585449,
          6.317409
        ],
        [
          -75.585097,
          6.317308
        ],
        [
          -75.584853,
          6.317277
        ],
        [
          -75.584452,
          6.317334
        ],
        [
          -75.584123,
          6.317393
        ],
        [
          -75.583918,
          6.317236
        ],
        [
          -75.583735,
          6.317029
        ],
        [
          -75.583414,
          6.316967
        ],
        [
          -75.583071,
          6.316881
        ],
        [
          -75.582718,
          6.316944
        ],
        [
          -75.582395,
          6.317047
        ],
        [
          -75.582015,
          6.316979
        ],
        [
          -75.581803,
          6.316786
        ],
        [
          -75.581544,
          6.316742
        ],
        [
          -75.581289,
          6.316708
        ],
        [
          -75.581,
          6.31662
        ],
        [
          -75.580726,
          6.316431
        ],
        [
          -75.580465,
          6.316303
        ],
        [
          -75.580247,
          6.316222
        ],
        [
          -75.580165,
          6.315989
        ],
        [
          -75.57983,
          6.315823
        ],
        [
          -75.579537,
          6.315877
        ],
        [
          -75.579256,
          6.315943
        ],
        [
          -75.578965,
          6.315906
        ],
        [
          -75.578787,
          6.315613
        ],
        [
          -75.578375,
          6.315646
        ],
        [
          -75.577986,
          6.315688
        ],
        [
          -75.577742,
          6.315638
        ],
        [
          -75.577495,
          6.315546
        ],
        [
          -75.57723,
          6.315508
        ],
        [
          -75.576976,
          6.315456
        ],
        [
          -75.576629,
          6.315379
        ],
        [
          -75.576402,
          6.315212
        ],
        [
          -75.576151,
          6.315195
        ],
        [
          -75.575875,
          6.315282
        ],
        [
          -75.575582,
          6.315293
        ],
        [
          -75.575496,
          6.314913
        ],
        [
          -75.575465,
          6.31467
        ],
        [
          -75.575219,
          6.314438
        ],
        [
          -75.57492,
          6.314332
        ],
        [
          -75.574648,
          6.314353
        ],
        [
          -75.57439,
          6.314337
        ],
        [
          -75.574127,
          6.314175
        ],
        [
          -75.57388,
          6.313889
        ],
        [
          -75.573527,
          6.31379
        ],
        [
          -75.573124,
          6.313803
        ]
      ]]
}
}
});
      map.addSource("pins", {
          "type": "geojson",
          "data": {
              "type": "FeatureCollection",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                    "description": "<strong>Nombre: </stong><strong>Paris</strong> <br> <p>Numero de casos: <?php $query = "SELECT count(cod_eve) FROM `casos` WHERE comuna = 'PARIS'";
                      $result = mysqli_query($link, $query);

                      $row = mysqli_fetch_array($result);

                   echo $row[0];

                    ?></p>",
                    "icon": "marker-15"
                  },
                  "geometry": {
                    "coordinates": [-75.581107,6.312885],
                    "type": "Point"
                  }
                },
                {
                  "type": "Feature",
                  "properties": {
                    "description": "<strong>Acevedo</strong>",

                    "description": "<strong>Acevedo</strong><br> <p>Numero de casos: <?php $query = "SELECT count(cod_eve) FROM `casos` WHERE comuna = 'ACEVEDO'";
                      $result = mysqli_query($link, $query);

                      $row = mysqli_fetch_array($result);

                   echo $row[0];

                    ?></p>",

                    "icon": "marker-15"
                  },
                  "geometry": {
                    "coordinates": [-75.55313,6.312894],
                    "type": "Point"
                  }
                },
                {
                  "type": "Feature",
                  "properties": {
                    "description": "<strong>Madera</strong><br> <p>Numero de casos: <?php $query = "SELECT count(cod_eve) FROM `casos` WHERE comuna = 'MADERA'";
                      $result = mysqli_query($link, $query);

                      $row = mysqli_fetch_array($result);

                   echo $row[0];

                    ?></p>",
                    "icon": "marker-15"
                  },
                  "geometry": {
                    "coordinates": [-75.559876,6.317818],
                    "type": "Point"
                  }
                },
                {
                  "type": "Feature",
                  "properties": {
                    "description": "<strong>Santa Ana</strong> <br> <p>Numero de casos: <?php $query = "SELECT count(cod_eve) FROM `casos` WHERE comuna = 'SANTA ANA'";
                      $result = mysqli_query($link, $query);

                      $row = mysqli_fetch_array($result);

                   echo $row[0];

                    ?></p>",
                    "icon": "marker-15"
                  },
                  "geometry": {
                    "coordinates": [-75.566265,6.325389],
                    "type": "Point"
                  }
                },
                {
                  "type": "Feature",
                  "properties": {
                    "description": "<strong>Centro</strong> <br> <p>Numero de casos: <?php $query = "SELECT count(cod_eve) FROM `casos` WHERE comuna = 'CENTRO'";
                      $result = mysqli_query($link, $query);

                      $row = mysqli_fetch_array($result);

                   echo $row[0];

                    ?></p>",
                    "icon": "marker-15"
                  },
                  "geometry": {
                    "coordinates": [-75.558773,6.334078],
                    "type": "Point"
                  }
                },
                {
                  "type": "Feature",
                  "properties": {
                    "description": "<strong>La Cumbre</strong> <br> <p>Numero de casos: <?php $query = "SELECT count(cod_eve) FROM `casos` WHERE comuna = 'LA CUMBRE'";
                      $result = mysqli_query($link, $query);

                      $row = mysqli_fetch_array($result);

                   echo $row[0];

                    ?></p>",
                    "icon": "marker-15"
                  },
                  "geometry": {
                    "coordinates": [-75.567551,6.341713],
                    "type": "Point"
                  }
                },
                {
                  "type": "Feature",
                  "properties": {
                    "description": "<strong>Bellavista</strong> <br> <p>Numero de casos: <?php $query = "SELECT count(cod_eve) FROM `casos` WHERE comuna = 'BELLAVISTA'";
                      $result = mysqli_query($link, $query);

                      $row = mysqli_fetch_array($result);

                   echo $row[0];

                    ?></p>",
                    "icon": "marker-15"
                  },
                  "geometry": {
                    "coordinates": [-75.564347,6.348994],
                    "type": "Point"
                  }
                },
                {
                  "type": "Feature",
                  "properties": {
                    "description": "<strong>Altos de Niquía</strong> <br> <p>Numero de casos: <?php $query = "SELECT count(cod_eve) FROM `casos` WHERE comuna = 'ALTOS DE NIQUIA'";
                      $result = mysqli_query($link, $query);

                      $row = mysqli_fetch_array($result);

                   echo $row[0];

                    ?></p>",
                    "icon": "marker-15"
                  },
                  "geometry": {
                    "coordinates": [-75.554351,6.345808],
                    "type": "Point"
                  }
                },
                {
                  "type": "Feature",
                  "properties": {
                    "description": "<strong>Niquía</strong> <br> <p>Numero de casos: <?php $query = "SELECT count(cod_eve) FROM `casos` WHERE comuna = 'NIQUIA'";
                      $result = mysqli_query($link, $query);

                      $row = mysqli_fetch_array($result);

                   echo $row[0];

                    ?></p>",
                    "icon": "marker-15"
                  },
                  "geometry": {
                    "coordinates": [-75.550383,6.340348],
                    "type": "Point"
                  }
                },
                {
                  "type": "Feature",
                  "properties": {
                    "description": "<strong>Fontidueño</strong> <br> <p>Numero de casos: <?php $query = "SELECT count(cod_eve) FROM `casos` WHERE comuna = 'FONTIDUENO'";
                      $result = mysqli_query($link, $query);

                      $row = mysqli_fetch_array($result);

                   echo $row[0];

                    ?></p>",
                    "icon": "marker-15"
                  },
                  "geometry": {
                    "coordinates": [-75.543058,6.330186],
                    "type": "Point"
                  }
                },

                {
                  "type": "Feature",
                  "properties": {
                    "description" : "<strong>No referenciados</strong>",
                    "icon": "marker-15",
                  },
                  "geometry":{
                    "coordinates": [ -75.564347,6.305006],
                    "type": "Point"
                  }
                }
            ]
        }
    });

    // Add a layer showing the places.
    map.addLayer({
        "id": "pins",
        "type": "symbol",
        "source": "pins",
        "layout": {
            "icon-image": "marker-15",
            "icon-allow-overlap": true
        }
    });

    map.addLayer({
      "id": "Paris",
      "type": "fill",
      "source": "Paris",
      "layout": {},
      "paint": {
        "fill-color": "#088",
        "fill-opacity": 0.8
      }
    });
});


// When a click event occurs near a place, open a popup at the location of
// the feature, with description HTML from its properties.
map.on('click', function (e) {
    var features = map.queryRenderedFeatures(e.point, { layers: ['pins'] });

    if (!features.length) {
        return;
    }

    var feature = features[0];

    // Populate the popup and set its coordinates
    // based on the feature found.
    var popup = new mapboxgl.Popup()
        .setLngLat(feature.geometry.coordinates)
        .setHTML(feature.properties.description)
        .addTo(map);
});

// Use the same approach as above to indicate that the symbols are clickable
// by changing the cursor style to 'pointer'.
map.on('mousemove', function (e) {
    var features = map.queryRenderedFeatures(e.point, { layers: ['pins'] });
    map.getCanvas().style.cursor = (features.length) ? 'pointer' : '';
});
</script>

      <br>


      <div class="row">
        <div class="container">
          <div class="col-md-12">
            <a href="" class="button-3d"><h4 id= "buttonText">Upload Excel</h4></a>
          </div>
        </div>
      </div>

  </body>
</html>
