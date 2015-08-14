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
	$sql = "SELECT * FROM Users";
	$result = $link->query($sql);

	if ($result-> num_rows > 0) { //did it return anything
		echo '<table>'; //Start Table

		while ($row = $result->fetch_assoc()) //keep pulling more
		{
			$LastNameHolder = $row['LastName'];
			$FirstNameHolder = $row['FirstName'];
			//print "$FirstNameHolder";
			//print "$LastNameHolder";
			
			print "<tr><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td> Assigned Projects: "; //Print Left Side of Table
			$sql2 = "SELECT * FROM Projects WHERE FirstName = '$FirstNameHolder' AND LastName =  '$LastNameHolder'"; //print projects being worked on
			$result2 = $link->query($sql2);
			// if ($link->query($sql2) === TRUE){
			//  print "here";
			// } else
			// {
			// 	echo "Error: " . $sql2 . "<br>" . $link->error;
			// }
			// if ($result2-> num_row > 0) {
				// while ($row2 = $result2->fetch_assoc()) //keep pulling more
				// {
						// print "--".$row2['Project']."--";
				// }
					// print "NO";
			// }
			// else
			// {
				// print "No Current Projects";
			// }
			print "</td></tr>";
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
