<?php  
	session_start();
	require 'config/dbc.php';

	$date = mysqli_real_escape_string($connection, $_POST['create_date']);
	$category_id = mysqli_real_escape_string($connection, $_POST['category_id']);
	$member_id = mysqli_real_escape_string($connection, $_SESSION['member_id']);
	$title = mysqli_real_escape_string($connection, $_POST['title']);
	$slug = mysqli_real_escape_string($connection, $_POST['slug']);
	$content = mysqli_real_escape_string($connection, $_POST['content']);
	$meta_description = mysqli_real_escape_string($connection, $_POST['meta_description']);
	$meta_keyword = mysqli_real_escape_string($connection, $_POST['meta_keyword']);

	$id = $_POST['id'];
	
	mysqli_query($connection, "UPDATE message SET create_date='$date', category_id='$category_id', member_id='$member_id', title='$title', slug='$slug', content='$content', meta_description='$meta_description', meta_keyword='$meta_keyword' WHERE id=$id") or die(mysqli_error($connection));

	header("Location:sms.php");

?>