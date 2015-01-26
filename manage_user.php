<?php
require_once('user.php');
$userobj = new User();

//Deleting Users by their email id
$flag = $_REQUEST['flag'];
$email = $_REQUEST['email'];

if($flag == 'delete' && !empty($email)) {
	$userobj->deleteUser($email);

	header("Location: manage_user.php");
	exit();
}

//Create User
if($_POST['Submit']) {
	if($_POST['flag'] == 'edit') {
		//Update User
		$userobj->updateUser($email);
	}
	else {
		//Create User
		$userobj->createUser();
	}
	header("Location: manage_user.php");
	exit();
}

//Getting selected user info for updation
if($flag == 'edit' && !empty($email)) {

	//Getting User details by email id
	$aUserInfo = $userobj->getUserByEmail($email);

	$name = $aUserInfo['name'];
	$email = $aUserInfo['email'];
	$password = $aUserInfo['password'];
}

//Getting Users
$aUsers = $userobj->getUsers('10');
?>

<h1>A very basic CRUD application using PHP and Mongodb</h1>
<h3>Add User</h3>
<?php include('form_add_user.php'); ?>

<h3>List Users</h3>
<?php include('list_user.php'); ?>
