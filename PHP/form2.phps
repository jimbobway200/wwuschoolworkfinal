<html>
<body>

  <?php
  //include('form2.php');
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
  $admin_new_student = '<FORM METHOD="LINK" ACTION="admin_new_student.php"><INPUT TYPE="submit" VALUE="Add New Student"></FORM>';
  $approve_student = '<FORM METHOD="LINK" ACTION="approve_student.php"><INPUT TYPE="submit" VALUE="Approve Student"></FORM>';
  $add_project = '<FORM METHOD="LINK" ACTION="add_project.php"><INPUT TYPE="submit" VALUE="Add New Project"></FORM>';
  $view_projects = '<FORM METHOD="LINK" ACTION="view_projects.php"><INPUT TYPE="submit" VALUE="View Projects"></FORM>';
  $view_students = '<FORM METHOD="LINK" ACTION="view_students.php"><INPUT TYPE="submit" VALUE="View Students"></FORM>';
  $edit_students = '<FORM METHOD="LINK" ACTION="edit_student.php"><INPUT TYPE="submit" VALUE="Edit Students"></FORM>';
  $delete_students = '<FORM METHOD="LINK" ACTION="delete_student.php"><INPUT TYPE="submit" VALUE="Delete Students"></FORM>';
  $edit_project = '<FORM METHOD="LINK" ACTION="edit_project.php"><INPUT TYPE="submit" VALUE="Edit Project"></FORM>';
  $delete_project = '<FORM METHOD="LINK" ACTION="delete_project.php"><INPUT TYPE="submit" VALUE="Delete Project"></FORM>';
  $student_request = '<FORM METHOD="LINK" ACTION="new_student.php"><INPUT TYPE="submit" VALUE="Request an ID"></FORM>';

  if ($_POST["WNumber"] == "admin" && $_POST["password"] =="bozo")
  {
		//Admin
		// print("<FORM METHOD="LINK" ACTION="admin_new_student.php"><INPUT TYPE="submit" VALUE="Clickable Button"></FORM>);
		echo "Hi Admin, Please select a function to perform here";
		echo $admin_new_student;
		echo $approve_student;
		echo $add_project;
		echo $view_projects;
		echo $view_students;
    echo $delete_students;
    echo $edit_students;
    echo $edit_project;
    echo $delete_project;
  }
  else
  {
    $WNUMBER = $_POST["WNumber"];
    $PASSWORD = $_POST["password"];
    $sql = "Select * From Users Where id = '$WNUMBER' and password = '$PASSWORD'";
    $result = $link->query($sql);
    if ($result-> num_rows > 0) { //did it return anything
      echo "Hi '$WNUMBER'! Please make a selection below!";
      echo $view_projects;
      echo $view_students;
    } else{
      echo "Invalid UserName Password Combo. Either go back and re-enter or click creat a new user button below to be added";
      echo $student_request;
    }
  }
?>

</body>
</html>

<!-- E-mail: <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> -->
