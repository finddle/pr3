<?php
require_once('config.php');
	if (session_status() == PHP_SESSION_NONE) {
    	session_start();
	}
	if(isset($_SESSION['username'])) {
		session_destroy();
	}
	header("Location: ../../index.php");
?>