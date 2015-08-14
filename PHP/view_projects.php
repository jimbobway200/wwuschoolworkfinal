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

/*** check if the link is a valid resource ***/
if(!mysqli_connect_errno())
{
	$sql = "SELECT * FROM Projects";
	$result = $link->query($sql);

	if ($result-> num_rows > 0) { //did it return anything
		echo '<table>'; //<tr><td>WNumber</td><td>Password</td><td>FirstName</td><td>LastName</td><td>Email</td><td>Phone</td><td>Track</td><td>Status</td>'

		while ($row = $result->fetch_assoc()) //keep pulling more
		{
			print "<tr><td> Project Name: ".$row['Project']."</td><td> Student Assigned: ".$row['FirstName']."</td><td>".$row['LastName']."</td></tr>";
		}
		echo '</table>';
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
