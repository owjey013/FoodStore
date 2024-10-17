<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertCustomersBtn'])) {

	$query = insertCustomers($pdo, $_POST['customers_name'], 
		$_POST['age'], $_POST['date_of_birth'], $_POST['email_address']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Insertion failed";
	}

}


if (isset($_POST['editCustomersBtn'])) {
	$query = updateCustomers($pdo, $_POST['customers_name'], $_POST['age'], 
		$_POST['date_of_birth'], $_POST['email_address'], $_GET['chef_id']);

	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Edit failed";;
	}

}




if (isset($_POST['deleteCustomersBtn'])) {
	$query = deleteCustomers($pdo, $_GET['customers_id']);

	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Deletion failed";
	}
}




if (isset($_POST['insertNewChefBtn'])) {
	$query = insertChef($pdo, $_POST['first_name'], $_POST['last_name'], $_GET['chef_id']);

	if ($query) {
		header("Location: ../viewprojects.php?chef_id=" .$_GET['chef_id']);
	}
	else {
		echo "Insertion failed";
	}
}




if (isset($_POST['editPChefBtn'])) {
	$query = updateChef($pdo, $_POST['first_name'], $_POST['last_name'], $_GET['chef_id']);

	if ($query) {
		header("Location: ../viewprojects.php?chef_id=" .$_GET['chef_id']);
	}
	else {
		echo "Update failed";
	}

}




if (isset($_POST['deleteChefBtn'])) {
	$query = deleteChef($pdo, $_GET['chef_id']);

	if ($query) {
		header("Location: ../viewprojects.php?chef_id=" .$_GET['chef_id']);
	}
	else {
		echo "Deletion failed";
	}
}




?>