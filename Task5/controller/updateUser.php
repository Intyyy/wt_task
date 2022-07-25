<?php  
require_once '../model/model.php';


if (isset($_POST['updateUser'])) {
	$data['username'] = $_POST['username'];
	$data['password'] = $_POST['password'];


  if (updateUser(1, $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../view/editGuestProfile.php');
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>