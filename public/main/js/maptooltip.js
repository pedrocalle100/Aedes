var map = new mapboxgl.Map({
  container. 'map',
  style: 'mapbox://styles/pcallej/ciu4udg6h00cv2ilfny4lp7jw',
  center: [-75.549,6.332],
  zoom: 13.2
});


map.on('click', function displayTooltip(e) {
  var features = map.queryRenderedFeatures(e.point,{layers:['pins']});
  if (!features.length){
    return;
  }

  var feature = features[0];
  var popup = new mapboxgl.Popup()
  .setLngLat(feature.geometry.coordinates)
  .setHTML(feature.properties.description)
  .setHTML(feature.properties.numcasos)
  .addTo(map);
});

map.on('mousemove', function (e) {
    var features = map.queryRenderedFeatures(e.point, { layers: ['pins'] });
    map.getCanvas().style.cursor = (features.length) ? 'pointer' : '';
});
