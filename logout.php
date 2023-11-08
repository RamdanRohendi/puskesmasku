<?php
    include 'lib/library.php';
    
	session_start();
	session_destroy();
	header('location:'.base_url());
?>
