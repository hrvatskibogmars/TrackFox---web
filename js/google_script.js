

function initialize() {

 var lat = 45.8144400;
 var lng = 25.9779800;
 var trenutniPolozaj = new google.maps.LatLng(lat,lng);
 
	var mapOptions = {
	  zoom: 10,
	  center: trenutniPolozaj
	}
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

	var marker = new google.maps.Marker({
		position: trenutniPolozaj,
		map: map,	
	});

  
}
google.maps.event.addDomListener(window, 'load', initialize);


