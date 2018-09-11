<?php

// Include Database Class file
include_once "../../config/Database.php";

// Create Instance of Database Class 
$database = new Database();

// Call getConnection method
if($database->getConnection()){
	echo "Connected"; 
} else {
	echo "Error";
}
