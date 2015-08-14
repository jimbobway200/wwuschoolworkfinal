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

$wnumber = $_POST["WNumber"];

/*** check if the link is a valid resource ***/
if(!mysqli_connect_errno())
{
	$sql = "Select * From Users WHERE id = '$wnumber'";
	$result = $link->query($sql);

	if ($result-> num_rows > 0) { //did it return anything
		while ($row = $result->fetch_assoc()) //keep pulling more
		{
			$WNUMBER = $row["id"];
			$FIRSTNAME = $row["FirstName"];
			$LASTNAME = $row["LastName"];
			$EMAIL = $row["Email"];
			$PASSWORD = $row["password"];
			$PHONE = $row["Phone"];
			$COMPANY = $row["Company"];
			$TRACK = $row["Track"];
		}
	} else{
		echo "0 results";
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

	<h2>Admin Edit New User</h2>
	<form method="post" action="edit_studentRCV2.php" method="post">
		First Name: <input type="text" name="FirstName" Required value = "'.$FIRSTNAME.'">
		<br><br>
		Last Name: <input type="text" name="LastName" Required value = "'.$LASTNAME.'">
		<br><br>
		E-mail: <input type="email" name="Email" pattern="([a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$)" Required value = "'.$EMAIL.'">
		<br><br>
		Phone: <input type="text" name="Phone" required pattern="([0-9]{10})|(^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$)" value = "'.$PHONE.'">
		<br><br>
		WNumber: '.$WNUMBER.'
		<br><br>
		Password: <input type="text" name="Password" required value = "'.$PASSWORD.'">
		<input type="hidden" name="WNumber" value = "'.$WNUMBER.'">
		<br><br>
		Track:
		<input type="radio" name="Track" value="Track1">Track1
		<input type="radio" name="Track" value="Track2">Track2
		<input type="radio" name="Track" value="Track3">Track3
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
';
