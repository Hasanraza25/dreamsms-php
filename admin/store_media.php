<?php  
	require 'config/dbc.php';

	$date = mysqli_real_escape_string($connection, $_POST['create_date']);
	$media_type = mysqli_real_escape_string($connection, $_POST['media_type']);
	$title = mysqli_real_escape_string($connection, $_POST['title']);
	$slug = mysqli_real_escape_string($connection, $_POST['slug']);
	$description = mysqli_real_escape_string($connection, $_POST['description']);
	$media_img = 'No image found';
	$status = 'DEACTIVE';
	$meta_description = mysqli_real_escape_string($connection, $_POST['meta_description']);
	$meta_keyword = mysqli_real_escape_string($connection, $_POST['meta_keyword']);

	if (isset($_FILES['media_img'])) 
	{
		$name = uniqid(time());
		$extension = pathinfo($_FILES['media_img']['name'], PATHINFO_EXTENSION);
		$fileName = $name . "." . $extension;
		$hasFileUploaded = move_uploaded_file($_FILES['media_img']['tmp_name'], '../uploads/' . $fileName);
	}

	if ($hasFileUploaded) {
		mysqli_query($connection, "INSERT INTO media(create_date, media_type, title, slug, description, media_img, status, meta_description, meta_keyword) 
							VALUES('$date', '$media_type', '$title', '$slug', '$description', '$fileName', '$status', '$meta_description', '$meta_keyword')") or die(mysqli_error($connection));
		header("Location:media.php");
	}









	

?>