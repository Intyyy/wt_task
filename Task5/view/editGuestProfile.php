<?php 

require_once '../controller/userInfo.php';
$user = fetchUser(1);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../controller/updateUser.php" method="POST" enctype="multipart/form-data">
  <label for="username">User Name:</label><br>
  <input value="<?php echo $user['UserName'] ?>" type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input value="<?php echo $user['Password'] ?>" type="text" id="password" name="password"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateUser" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>