<?php
	session_start();  
	require 'config/dbc.php';

	$date = mysqli_real_escape_string($connection, $_POST['create_date']);
	$category_id = mysqli_real_escape_string($connection, $_POST['category_id']);
	$member_id = mysqli_real_escape_string($connection, $_SESSION['member_id']);
	$title = mysqli_real_escape_string($connection, $_POST['title']);
	$slug = mysqli_real_escape_string($connection, $_POST['slug']);
	$content = mysqli_real_escape_string($connection, $_POST['content']);
	$status = 'DEACTIVE';
	$meta_description = mysqli_real_escape_string($connection, $_POST['meta_description']);
	$meta_keyword = mysqli_real_escape_string($connection, $_POST['meta_keyword']);

	mysqli_query($connection, "INSERT INTO message(create_date, category_id, member_id, title, slug, content, status, meta_description, meta_keyword) 
							VALUES('$date', '$category_id', '$member_id', '$title', '$slug', '$content', '$status', '$meta_description', '$meta_keyword')") or die(mysqli_error($connection));

	header("Location:sms.php");

?>