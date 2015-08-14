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
  /*** check if the link is a valid resource ***/
  if(!mysqli_connect_errno())
  {
    $sql = "SELECT * FROM Users";
    $result = $link->query($sql);
    if ($result-> num_rows > 0) { //did it return anything
      while ($row = $result->fetch_assoc()) //keep pulling more
      {
          echo "user: " . $row["id"]. " - First Name: ". $row["FirstName"]. " - Last Name: ". $row["LastName"]. "<br>";
      }
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
  <br>
  Please Enter the WNumber above for the user you wish to Delete
  <br>
  <form action="delete_studentRCV.php" method="post">
    WNumber: <input type="text" name="WNumber" required pattern="([W]{1}\d{8})"><br>
    <input type="submit">
  </form>

</body>
</html>
