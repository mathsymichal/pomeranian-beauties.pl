function loadMap() {
	if (GBrowserIsCompatible ()) {
		var googleMap = new GMap2(document.getElementById("googleMap"));
		googleMap.setCenter(new GLatLng(37.4419, -122.1419), 13);
	}
}
