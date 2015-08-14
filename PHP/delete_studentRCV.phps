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

/*** check if the link is a valid resource ***/
if(!mysqli_connect_errno())
{
	$sql = "Delete From Users WHERE id = '$wnumber'";
	$result = $link->query($sql);

	if ($link->query($sql) === TRUE){
	 print "Record for '$wnumber' has been deleted";
	} else
	{
		echo "Error: " . $sql2 . "<br>" . $link->error;
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
