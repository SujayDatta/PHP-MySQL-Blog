<!Doctype HTML>
<html>
<body>
<?php
$con=mysqli_connect("localhost","root","123","blog");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM posts");
?>
<strong>
	<?php
while($row = mysqli_fetch_array($result)) {
  echo $row['title'] . " " . $row['content'];
  echo "<br>";
}

mysqli_close($con);
?>	
</strong>
</body>
</html>