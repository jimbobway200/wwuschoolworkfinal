<?php
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
    /*** if we are successful ***/
    echo nl2br ("Connected successfully\n");

	$sql = "CREATE TABLE markers (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR( 60 ) NOT NULL ,
  address VARCHAR( 80 ) NOT NULL ,
  lat FLOAT( 10, 6 ) NOT NULL ,
  lng FLOAT( 10, 6 ) NOT NULL ,
  type VARCHAR( 30 ) NOT NULL
	)";


	 //if ($link->query($sql) === TRUE) {
	if ($link->query($sql) === TRUE) {
		echo "Table markers created successfully";
	} else {
		 echo "Error creating table: " . $link->error;
	}

//	$sql = "INSERT INTO Users (id, password, rank)
//	VALUES ('admin', 'bozo2', 'admin')";
//	if ($link->query($sql) === TRUE) {
//	echo "New record created successfully";
//	} else {
//	 	echo "Error: " . $sql . "<br>" . $link->error;
//	}

//	$sql = "SELECT * FROM Users";
// $result = $link->query($sql);

	//if ($result-> num_rows > 0) {
//		while ($row = $result->fetch_assoc())
		//{
//			echo "user: W" . $row["id"]. " - Password: ". $row["password"]. "<br>";
		//}
	//} else{
//		echo "0 results";
//	}


	/*** close the connection ***/
    $link->close();
    }
else
    {
    /*** if we fail to connect ***/
    echo 'Unable to connect';
    }
?>
