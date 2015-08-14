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

$ProjectName = $_POST["ProjectName"];
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$CompanyName = $_POST["CompanyName"];
$SupervisorName = $_POST["SupervisorName"];
$CompletionDate = $_POST["CompletionDate"];



/*** check if the link is a valid resource ***/
if(!mysqli_connect_errno())
{
	// //Show Current Projects and Students Working
	// $sql = "SELECT * FROM Projects";
	// $result = $link->query($sql);
	// if ($result-> num_rows > 0) {
	//   echo "Project has been created. Thank you!";
	// } else {
	//   echo "Sorry, but that student name isn't in the database. Check your spelling";
	// }

	$sql = "Update Projects SET FirstName = '$FirstName', LastName = '$LastName', Project = '$ProjectName', Company = '$CompanyName', Supervisor = '$SupervisorName', CompletionDate = '$CompletionDate' WHERE Project = '$ProjectName'";
	//$result2 = $link->query($sql);
	if ($link->query($sql) === TRUE) {
		echo "$ProjectName has been edited. Thank you!";
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
