var locations = [
  ['Madagascar',-	18.766947,46.869106999999985],
  ['Papouasie',-4.269928,138.08035289999998],
  ['Tahiti',-17.6509195,-149.42604210000002],
  ['Indonésie',-0.789275,113.92132700000002],
  ['Bora Bora',-16.5004126,-151.74149039999998],
  ['Iles Fidji',-17.713371,178.06503199999997],
  ['Thaïlande',15.870032,100.99254100000007],
  ['Seychelles',-4.679574,55.49197700000002],
  ['Cuba',21.521757,-77.78116699999998],
  ['Hawai',19.8967662,-155.58278180000002]      
];

var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 3,
  center: new google.maps.LatLng(0, 0),
  streetViewControl: false,
  mapTypeControl: false,
  scrollwheel: false,
  zoomControlOptions: {position: google.maps.ControlPosition.TOP_LEFT},
  mapTypeId: google.maps.MapTypeId.HYBRID
});

map.setOptions({ minZoom: 3, maxZoom: 6 });
var infowindow = new google.maps.InfoWindow();
var marker, i;

for (i = 0; i < locations.length; i++) {  
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
    map: map,
    icon:'images/marker.png'
  });
  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      infowindow.setContent(locations[i][0]);
      infowindow.open(map, marker);
    }
  })(marker, i));
}