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

$wnumber = $_POST["WNumber"];
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$Email = $_POST["Email"];
$Phone = $_POST["Phone"];
$Password = $_POST["Password"];
$Track = $_POST["Track"];

/*** check if the link is a valid resource ***/
if(!mysqli_connect_errno())
{
	$sql = "Update Users SET FirstName = '$FirstName', LastName = '$LastName', Email = '$Email', Phone = '$Phone', password = '$Password', Track = '$Track' WHERE id = '$wnumber'";
	$result = $link->query($sql);
	// $sql = "Update Users SET LastName = '$LastName' WHERE id = '$wnumber'";
	// $result = $link->query($sql);
	// $sql = "Update Users SET Email = '$Email' WHERE id = '$wnumber'";
	// $result = $link->query($sql);
	// $sql = "Update Users SET Phone = '$Phone' WHERE id = '$wnumber'";
	// $result = $link->query($sql);
	// $sql = "Update Users SET password = '$Password' WHERE id = '$wnumber'";
	// $result = $link->query($sql);
	// $sql = "Update Users SET FirstName =  Track = '$Track' WHERE id = '$wnumber'";
	// $result = $link->query($sql);
	//AND LastName = '$LastName' AND Email = '$Email' AND Phone = '$Phone' AND password = '$Password' and Track = '$Track'

	if ($link->query($sql) === TRUE) {
		echo "$wnumber has been edited. Thank you!";
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
