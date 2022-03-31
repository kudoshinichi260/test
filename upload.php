<!-- <?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?> -->
<!-- <?php 
  var_dump($_FILES);
  move_uploaded_file($_FILES['fileToUpload']['tmp_name'],'assets/image/'.$_FILES['fileToUpload']['name']);
  
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
      <td>ID</td>
      <td>Username</td>
      <td>Email</td>
      <td>Phone</td>
    </tr>
    <?php
    require 'sql_connect.php';
    $query=mysqli_query($conn,"select * from khachhang ");
    while($row=mysqli_fetch_array($query)){
    ?>
    <tr>
      <td><?php echo $row['MAKH']; ?></td>
      <td><?php echo $row['HOTEN']; ?></td>
      <td><?php echo $row['EMAIL']; ?></td>
      <td><?php echo $row['SODT']; ?></td>
      <td><a href="edit_user.php?MAKH=<?php echo $row['MAKH']; ?>">Edit</a></td>
      <td><a href="delete_user.php?MAKH=<?php echo $row['MAKH']; ?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<form name="my_form" method="post" action="delete_user.php">
    User Name: <input type="text" name="username_delete" placeholder="username"><br />
    <input type="submit" name="btn_delete" value="Delete User" />
</form>

</body>
</html>