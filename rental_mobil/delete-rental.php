<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_rental = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($db, "DELETE FROM rental WHERE id_rental='$id_rental'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:home-admin.php");
?>