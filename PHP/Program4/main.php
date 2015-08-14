<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Program4</title>
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      restaurant: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png',
        shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
      },
      bar: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png',
        shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
      }
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(41.941310, 12.491213),
        zoom: 7,
        mapTypeId: 'roadmap'
      });
	  google.maps.event.addListener(map, "rightclick", function(event) {
		var lat = event.latLng.lat();
		var lng = event.latLng.lng();
		// populate yor box/field with lat, lng
		alert("Lat=" + lat + "; Lng=" + lng);
		});
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("form1.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon,
            shadow: icon.shadow
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>
  </script>
  </head>

  <body onload="load()">
    <div id="map" style="width: 1600px; height: 800px"></div>
    <?php
    /*** mysql hostname ***/
    $hostname = 'db.cs.wwu.edu';
    /*** mysql username ***/
    $username = 'collinj8';
    /*** mysql password ***/
    $password = '4XU7B96Eg';
    /*** mysql database name ***/
    $dbname = 'collinj8';
    /*** connect to the database ***/
    $link = @new mysqli($hostname, $username, $password, $dbname);
    /*** check if the link is a valid resource ***/
    if(!mysqli_connect_errno())
    {
      $sql = "SELECT * FROM markers";
      $result = $link->query($sql);
      if ($result-> num_rows > 0) { //did it return anything
        while ($row = $result->fetch_assoc()) //keep pulling more
        {
          echo "ID: " . $row["id"]. " - Place Name: ". $row["name"]. " - address: ". $row["address"]. "<br>";
        }
      } else{
        echo "0 results";
      }
      /*** close the connection ***/
      $link->close();
    }
    else
    {
      /*** if we fail to connect ***/
      echo 'Unable to connect';
    }
    ?>
    <br>
    If you wish to delete a marker please enter the market number here:
    <br>
    <form action="delete_id.php" method="post">
      Delete ID: <input type="text" name="id_delete" required pattern="(\d)"><br>
      <input type="submit">
    </form>
    <br>
    If you would like to add a marker please enter the info needed below:
    <form action="insert_id.php" method="post">
      Name of Place: <input type="text" name="place_name" required><br>
      Address: <input type="text" name="address" required><br>
      latitude: <input type="text" name="lat" required><br>
      longitude: <input type="text" name="long" required><br>
      <input type="radio" name="Type" value="Restaurant" required>Restaurant<br>
      <input type="radio" name="Type" value="Sunset">Place to watch a Sunset<br>
      <input type="radio" name="Type" value="Park">City Park<br>
      <br>
      <input type="submit">
    </form>
  </body>
</html>
