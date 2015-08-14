<?php
//WNumber, password, status, LastName, FirstName, Phone, Email, Track
//NameProject, StudentName(optional), CompanyName, SupervisorName, URLProject(Optional), CompletionDate(optional), Image(optional)
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

	// $sql = "CREATE TABLE Users (
	// id VARCHAR(30) PRIMARY KEY,
	// password VARCHAR(30) NOT NULL,
  //   FirstName VARCHAR(30) NOT NULL,
	// LastName VARCHAR(30) NOT NULL,
	// Email VARCHAR(30) NOT NULL,
	// Phone VARCHAR(30) NOT NULL,
	// Track VARCHAR(30) NOT NULL,
	// status VARCHAR(30) NOT NULL
	// )";

  $sql = "CREATE TABLE Projects (
  Project VARCHAR(30) PRIMARY KEY,
  FirstName VARCHAR(30),
  LastName VARCHAR(30),
  Company VARCHAR(30) NOT NULL,
  Supervisor VARCHAR(30) NOT NULL,
  ProjectURL VARCHAR(30),
  CompletionDate VARCHAR(30),
  ImageURL VARCHAR(30)
  )";

	 //if ($link->query($sql) === TRUE) {
	if ($link->query($sql) === TRUE) {
		echo "Table Users created successfully";
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
