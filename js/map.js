	function initialize() {
			var myLatlng = new google.maps.LatLng(-23.646776, -46.514396,17);
			var mapOptions = {
					zoom: 17,
					center: myLatlng,
					disableDefaultUI: false,
					scrollwheel: false,
					draggable: false
			}
			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: 'Palácio do Pão'
			});
			var styles = [
					{
							stylers: [
									{ hue: "#23408F" },
									{ saturation: -20 }
							]
					},{
							featureType: "road",
							elementType: "geometry",
							stylers: [
									{ lightness: 100 },
									{ visibility: "simplified" }
							]
					},{
							featureType: "road.local",
							elementType: "labels",
					}
			];
			map.setOptions({styles: styles});
	}
	google.maps.event.addDomListener(window, 'load', initialize);