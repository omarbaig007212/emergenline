
<!DOCTYPE html>
  <html>
    <head>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
      <style>
        *{
          margin:0px;
          padding:0px;
          font-family: 'Slabo 27px', serif;
         }
         h6{
             color:#D5CAC7;
             font-family: verdana;
             background-color: black;
             font-size: 100%;  
         } 
        .h{
          font-size:50px;
          line-height:20px;
        }
        #map {
          margin:0;
          height: 450px;  
          width: 100%;  
         }
      </style>
    </head>
    <body>
	 <div>
      <h6><big>LOCATION OF HOSPITAL</big></h6>
	  </div>
      <div id="map"></div>
      <script>
  function initMap() {
    var nsu = {lat:13.0508335, lng:77.5939263};
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 18, center: nsu});
    var marker = new google.maps.Marker({position: nsu, map: map});
  }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDLbp9ciApf2bMJNuRT_8Ki3snPSXRmME&callback=initMap">
      </script>
    </body>
    <h style='color:black;'><b>@FRICK BRAINS</b><h>
  </html>
</footer>
