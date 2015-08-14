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
$dataarray = array(); //firstname array
$dataarray2 = array(); //lastname array
/*** check if the link is a valid resource ***/
if(!mysqli_connect_errno())
{
	$sql = "SELECT * FROM Users";
	$result = $link->query($sql);

	if ($result-> num_rows > 0)
	{
		while ($row = $result->fetch_assoc()) //fill the name array
		{
			$LastNameHolder = $row['LastName'];
			$FirstNameHolder = $row['FirstName'];
			$dataarray2[] = $LastNameHolder;
			$dataarray[] = $FirstNameHolder;
		}
	} //array should be full of student names
	else
	{
		echo "0 results";
		die();
	}

	echo '<table>'; //Start Table
	$arrlength = count($dataarray);
	for ($x = 0; $x < $arrlength; $x++) //itterate through name array
	{
		echo $dataarray[$x]; //first name
		echo $dataarray2[$x]; //last name
		$sql = "SELECT * FROM Projects WHERE FirstName = '$dataarray[$x]' AND LastName = '$dataarray2[$x]'"; //print projects being worked on
		$resultTWO = $link->query($sql);
		echo $dataarray[$x];
		echo " ";
		echo $dataarray2[$x];
		echo " Assigned Projects:";
		if ($resultTWO-> num_row > 0)
		{
			while ($rowTWO = $result2->fetch_assoc()) //keep pulling more
			{
				print "--".$rowTWO['Project']."--";
			}
		}
		else
		{
			print "No Current Projects";
		}
		echo "<br>";
	}
	echo '</table>'; //close the table

	/*** close the connection ***/
	$link->close();
} //end sql connection
else
{
    /*** if we fail to connect ***/
    echo 'Unable to connect';
}
?>
