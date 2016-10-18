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
              <h4 class="title">Please upload a .csv excel file to update the map</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Instructions -->

      <br>

      <!--<div class="row">
        <div class="container" id="containerMap">
          <div class="col-md-12">
          <div id='map'></div>
          <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoicGNhbGxlaiIsImEiOiJjaXUyeXVzZncwaHJxMnlvMTQ5aDUydHdnIn0.YUt_W4yQduMhunMDUMkGgw';
            var map = new mapboxgl.Map({
              container: 'map',
              style: 'mapbox://styles/pcallej/ciu4udg6h00cv2ilfny4lp7jw'
            });
          </script>
          </div>
        </div>
      </div>-->

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
      map.addSource("pins", {
          "type": "geojson",
          "data": {
              "type": "FeatureCollection",
              "features": [
                {
                  "type": "Feature",
                  "properties": {
                    "description": "<strong>Nombre: </stong><strong>Paris</strong> <br> <p>Numero de casos: 8</p>",
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
                    "description": "<strong>Madera</strong>",
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
                    "description": "<strong>Santa Ana</strong>",
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
                    "description": "<strong>Centro</strong>",
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
                    "description": "<strong>La Cumbre</strong>",
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
                    "description": "<strong>Bellavista</strong>",
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
                    "description": "<strong>Altos de Niquía</strong>",
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
                    "description": "<strong>Niquía</strong>",
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
                    "description": "<strong>Fontidueño</strong>",
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
