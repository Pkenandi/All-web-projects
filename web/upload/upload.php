<!--
  // Create database connection
  var_dump($_FILES);

  $host = 'localhost';
  $user = 'root';
  $pass = 'root';
  $dbname = 'image';

  $connection = mysqli_connect($host,$user, $pass,$dbname);
  
  if(isset($_POST['submit'])) 
  {
       $imagename = $_FILES["image"]["name"];
       $imagetmp = addslashes (file_get_contents($_FILES["image"]['tmp_name']));

       $insert_image = "INSERT INTO photo values('$imagetmp','imagename')";

       mysqli_query($connection,$insert_image);
  }

  mysqli_close($connection);
-->

<?php
  var_dump($_FILES);

  $host = 'localhost';
  $user = 'root';
  $pass = 'root';
  $dbname = 'image';

  $connection = mysqli_connect($host,$user, $pass,$dbname);

  $upload_image = $_FILES['image']['name'];

  $folder = "C:\wamp64\tmp\php51CA.tmp";

  move_uploaded_file($_FILES['name']['tmp_name'],"$folder".$_FILES['image']['name']);

  $insert_path = "INSERT INTO photo values ('$folder','$upload_image')";

  $var = mysqli_query($connection,$insert_path);


  mysqli_close($connection);

?>