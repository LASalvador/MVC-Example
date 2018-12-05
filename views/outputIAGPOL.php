<?php 
	session_start();
	echo $_SESSION['texto'] ? "nulo ": 'string<br>';
	echo "strripos(haystack, needle)";
?>