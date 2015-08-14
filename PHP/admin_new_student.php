<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 


<h2>Admin Add New User</h2>
<form method="post" action="admin_new_studentRCV.php" method="post"> 
   First Name: <input type="text" name="FirstName" Required>
   <br><br>
   Last Name: <input type="text" name="LastName" Required>
   <br><br>
   E-mail: <input type="email" name="Email" pattern="([a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$)" Required>
   <br><br>
   Phone: <input type="text" name="Phone" required pattern="([0-9]{10})|(^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$)">
   <br><br>
   WNumber: <input type="text" name="WNumber" required pattern="([W]{1}\d{8})">
   <br><br>
   Password: <input type="password" name="Password" required>
   <br><br>   
   Track:
   <input type="radio" name="Track" value="Track1">Track1
   <input type="radio" name="Track" value="Track2">Track2
   <input type="radio" name="Track" value="Track3">Track3
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>
</body>
</html>

