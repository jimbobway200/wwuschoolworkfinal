<html>
<body>
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

$project = $_POST["Project"];

/*** check if the link is a valid resource ***/
if(!mysqli_connect_errno())
{
	//echo "$project";
	$sql = "Select * From Projects WHERE Project = '$project'";
	$result = $link->query($sql);

	if ($result-> num_rows > 0) { //did it return anything
		while ($row = $result->fetch_assoc()) //keep pulling more
		{
			$PROJECT = $row["Project"];
			$FIRSTNAME = $row["FirstName"];
			$LASTNAME = $row["LastName"];
			$COMPANY = $row["Company"];
			$SUPERVISOR = $row["Supervisor"];
			$CompletionDate = $row["CompletionDate"];
		}
	} else{
		echo "Invalid Project Name";
		die();
	}


	/*** close the connection ***/
    $link->close();
    }
else
    {
    /*** if we fail to connect ***/
    echo 'Unable to connect';
    }


echo '

<h2>Edit Project</h2>
<form method="post" action="edit_projectRCV2.php" method="post">
	Project Name: <input type="text" name="ProjectName" Required value = "'.$PROJECT.'">
	<br><br>
	Student First Name : <input type="text" name="FirstName" value = "'.$FIRSTNAME.'">
	<br><br>
	Student Last Name : <input type="text" name="LastName" value = "'.$LASTNAME.'">
	<br><br>
	Company Name: <input type="text" name="CompanyName" Required value = "'.$COMPANY.'">
	<br><br>
	Supervisor Name: <input type="text" name="SupervisorName" Required value = "'.$SUPERVISOR.'">
	<br><br>
	Completion Date (Month/Day/Year): <input type="text" name="CompletionDate" value = "'.$CompletionDate.'">
	<br><br>
	<input type="submit" name="submit" value="Submit">
</form>
';
?>
