<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_customer = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($db, "DELETE FROM customer WHERE id_customer='$id_customer'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:home-admin.php");
?>