<?php
//WNumber, password, status, LastName, FirstName, Phone, Email, Track
//NameProject, StudentName(optional), CompanyName, SupervisorName, URLProject(Optional), CompletionDate, Image(optional)
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

$placeName = $_POST["place_name"];
$address = $_POST["address"];
$lat = $_POST["lat"];
$long = $_POST["long"];
$place_type = $_POST["Type"];



/*** check if the link is a valid resource ***/
if(!mysqli_connect_errno())
{
  $sql = "INSERT INTO markers (name, address, lat, lng, type)
  VALUES ('$placeName', '$address', '$lat', '$long', '$place_type')";
  if ($link->query($sql) === TRUE) {
    echo "New record created successfully for $placeName";
  } else {
     echo "Error: " . $sql . "<br>" . $link->error;
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
