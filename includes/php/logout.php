<?php
	if (session_status() == PHP_SESSION_NONE) {
    	session_start();
	}
	if(isset($_SESSION['username'])) {
		session_destroy();
	}
	header("Location: ".__DOC__."../../index.php");
?>