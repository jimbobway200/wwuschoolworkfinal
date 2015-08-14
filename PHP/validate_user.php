<?php
include('form2.php');
$hostname = 'db.cs.wwu.edu';

/*** mysql username ***/
$username = 'collinj8';

/*** mysql password ***/
$password = '4XU7B96Eg';

/*** mysql database name ***/
$dbname = 'collinj8';

/*** connect to the database ***/
$link = @new mysqli($hostname, $username, $password, $dbname);

// echo $_POST["WNumber"];
// echo nl2br("\n");
// //echo <br>;
// echo $_POST["password"];

$sql = "SELECT * FROM Users";
$result = $link->query($sql);

//Check Admin
if ($_POST["WNumber"] == "admin" && $_POST["password"] == "bozo")
{
  setcookie("TestCookie", "Admin");
  $output = shell_exec('php form2.php');
  echo "<pre>$output</pre>";
  // header("Location: http://sw.cs.wwu.edu/~collinj8/PHP/form2.html");


  exit;
}

//Check User
if ($result-> num_rows > 0) {
    $userfound = 0;
		while ($row = $result->fetch_assoc())
    {
		    // echo "user: W" . $row["id"]. " - Password: ". $row["password"]. "<br>";
        if ($row["id"] == $_POST["WNumber"])
        {

        }
    }
} else{
		echo "No User Found";
}


/*** close the connection ***/
$link->close();


?>
