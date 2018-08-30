<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCkOqMTxzwN0XRYpW6oRWfV-cQ0v0xWi1g'></script>
<!-- Google map code from EZ Map - https://ezmap.co -->
<script>
  function init() {
    var mapOptions = { "center": {  "lat": -33.48981917448171,  "lng": -70.61843617116392 }, "clickableIcons": false, "disableDoubleClickZoom": true, "draggable": false, "fullscreenControl": true, "keyboardShortcuts": false, "mapMaker": false, "mapTypeControl": false, "mapTypeControlOptions": {  "text": "Default (depends on viewport size etc.)",  "style": 0 }, "mapTypeId": "roadmap", "rotateControl": true, "scaleControl": false, "scrollwheel": false, "streetViewControl": false, "styles": false, "zoom": 16, "zoomControl": true};
    var mapElement = document.getElementById('ez-map');
    var map = new google.maps.Map(mapElement, mapOptions);
    var marker0 = new google.maps.Marker({title: "Feria del Software 2018 / Vicuña Mackenna 3939, Santiago, San Joaquín", icon: "https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png", position: new google.maps.LatLng(-33.48981917448171, -70.61843617116392), map: map});
var infowindow0 = new google.maps.InfoWindow({content: "<h3 class=\"infoTitle\">Feria del Software 2018 / Vicuña Mackenna 3939, Santiago, San Joaquín</h3><p></p>",map: map});
	infowindow0.open(map, marker0) ;
    google.maps.event.addDomListener(window, "resize", function() { var center = map.getCenter(); google.maps.event.trigger(map, "resize"); map.setCenter(center); });
  }
google.maps.event.addDomListener(window, 'load', init);
</script>

<div id='ez-map'></div>
<!-- End of EZ Map code - https://ezmap.co -->

