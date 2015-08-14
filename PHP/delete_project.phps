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
    $sql = "SELECT * FROM Projects";
    $result = $link->query($sql);
    if ($result-> num_rows > 0) { //did it return anything
      while ($row = $result->fetch_assoc()) //keep pulling more
      {
          echo "Project: " . $row["Project"]."<br>";
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
  Please Enter the Project Name above for the user you wish to Delete
  <br>
  <form action="delete_projectRCV.php" method="post">
    Project Name: <input type="text" name="ProjectName" required><br>
    <input type="submit">
  </form>

</body>
</html>
