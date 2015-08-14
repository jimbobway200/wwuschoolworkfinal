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

$WNumber = $_POST["WNumber"];
$password = $_POST["Password"];
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$Email = $_POST["Email"];
$Phone = $_POST["Phone"];
$Track = $_POST["Track"];
$status = "Pending";


/*** check if the link is a valid resource ***/
if(!mysqli_connect_errno())
{
	$sql = "INSERT INTO Users (id, password, FirstName, LastName, Email, Phone, Track, status)
	VALUES ('$WNumber', '$password', '$FirstName', '$LastName', '$Email', '$Phone', '$Track', '$status')";
	if ($link->query($sql) === TRUE) {
		echo "New record created successfully for $FirstName";
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
