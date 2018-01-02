var mapMarker;

function initialize() {
  /* NIIME coordinates */
  var mapLocation = new google.maps.LatLng(56.013273, 37.191913); 

  var mapOptions = {
    zoom: 15,
    center: mapLocation,
    scrollwheel: false,
  };
  
  var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

  /* NIIME map marker with address */
  mapMarker = new google.maps.Marker({
    position: mapLocation,
    animation: google.maps.Animation.DROP,
  });

  mapMarker.addListener('click', toggleBounce);
    /*map: map,*/
    /*animation:google.maps.Animation.BOUNCE,*/
    /*title: "АО НИИМЕ"*/
  mapMarker.setMap(map);

  /* add location description on map marker*/
  var mapInfoMarker = new google.maps.InfoWindow({
    content: "Мы находимся здесь!"
  });

  mapInfoMarker.open(map, mapMarker);

  var bounds = {
    17: [[20969, 20970], [50657, 50658]],
    18: [[41939, 41940], [101315, 101317]],
    19: [[83878, 83881], [202631, 202634]],
    20: [[167757, 167763], [405263, 405269]]
  };

  var imageMapType = new google.maps.ImageMapType({
    getTileUrl: function(coord, zoom) {
      if (zoom < 17 || zoom > 20 ||
          bounds[zoom][0][0] > coord.x || coord.x > bounds[zoom][0][1] ||
          bounds[zoom][1][0] > coord.y || coord.y > bounds[zoom][1][1]) {
        return null;
      }

      return ['http://www.gstatic.com/io2010maps/tiles/5/L2_',
          zoom, '_', coord.x, '_', coord.y, '.png'].join('');
    },
    
    tileSize: new google.maps.Size(256, 256)

  });

  map.overlayMapTypes.push(imageMapType);

}

function toggleBounce() {
  if (mapMarker.getAnimation() !== null) {
    mapMarker.setAnimation(null);
  } else {
    mapMarker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

google.maps.event.addDomListener(window, 'load', initialize);

