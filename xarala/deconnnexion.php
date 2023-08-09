<?php
	session_start(); //permet d'activer une session
	session_destroy();//permet de detruire une session
	header("location:login.php");
?>