<?php
$con=mysqli_connect("localhost","root","123","blog");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$title = mysqli_real_escape_string($con, $_POST['title']);
$content = mysqli_real_escape_string($con, $_POST['content']);

$sql="INSERT INTO posts (title, content)
VALUES ('$title', '$content')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>