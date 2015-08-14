<!DOCTYPE HTML>
<html>
<head>
</head>
<body>


<h2>Project 5: Search iTunes</h2>
<form method="post" action="ProjectRCV.php" method="post">
   Search Name: <input type="text" name="Name" Required>
   <br><br>
   OPTIONAL: Limit to _____ Results: <input type="number" min="0" step="1" name="Limit">
   <br><br>
   OPTIONAL: Country: <input type="text" name="Country">
   <br><br>
   OPTIONAL: Attributes
   <input type="radio" name="Attribute" value="movie">Movie
   <input type="radio" name="Attribute" value="podcast">Podcast
   <input type="radio" name="Attribute" value="music">Music
   <input type="radio" name="Attribute" value="musicVideo">Music Video
   <input type="radio" name="Attribute" value="audiobook">Audio Book
   <input type="radio" name="Attribute" value="shortFilm">Short Film
   <input type="radio" name="Attribute" value="tvShow">TV Show
   <input type="radio" name="Attribute" value="software">Software
   <input type="radio" name="Attribute" value="all">All
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
