	<span id="latlong" style="display:none"></span>
	
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script src="<?=base_url()?>assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?=base_url()?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/custom.js"></script>

	<!-- Google Map Init-->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyi6sQc0VQgVpqn4iTeupF1XigoFfpgYw"></script> -->


	<?php if($use_geolocation == "yes"){ ?>
	<script type="text/javascript">
		getLocation();
		var x = document.getElementById("latlong");

	    function getLocation() {
	      if (navigator.geolocation) {
  	        navigator.geolocation.getCurrentPosition(showPosition, showError);
	      } else { 
	        x.innerHTML = "Geolocation is not supported by this browser.";
	      }
	    }

	    function showPosition(position) {
	      x.innerHTML = position.coords.latitude + ", " + position.coords.longitude;

	      var date = new Date();
        date.setTime(date.getTime()+(1*24*60*60*1000));

        document.cookie = "latitude=" + position.coords.latitude + "; longitude=" + position.coords.longitude + "; expires="+ date.getDay +", expires=" + date.toGMTString();
        document.cookie = "longitude=" + position.coords.longitude + "; expires="+ date.getDay +", expires=" + date.toGMTString();
        
	    }

	    function showError(error) {
		    switch(error.code) {
		        case error.PERMISSION_DENIED:
		            x.innerHTML = "User denied the request for Geolocation."
		            break;
		        case error.POSITION_UNAVAILABLE:
		            x.innerHTML = "Location information is unavailable."
		            break;
		        case error.TIMEOUT:
		            x.innerHTML = "The request to get user location timed out."
		            break;
		        case error.UNKNOWN_ERROR:
		            x.innerHTML = "An unknown error occurred."
		            break;
		    }
		}

	</script>

    <?php } /*else{ ?>
	<script>
  

		// function initialize() {
		// 	var mapCanvas = document.getElementById('map');
		// 	var mapOptions = {
		// 		center: new google.maps.LatLng(44.5403, -78.5463),
		// 		zoom: 8,
		// 		scrollwheel: false,
		// 		mapTypeId: google.maps.MapTypeId.ROADMAP
		// 	}
		// 	var map = new google.maps.Map(mapCanvas, mapOptions)
		// }
		// google.maps.event.addDomListener(window, 'load', initialize);
	</script>
    <?php }*/ ?>
</body>

</html>