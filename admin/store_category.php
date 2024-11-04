<?php  
	require 'config/dbc.php';

	$date = mysqli_real_escape_string($connection, $_POST['create_date']);
	$title = mysqli_real_escape_string($connection, $_POST['title']);
	$slug = mysqli_real_escape_string($connection, $_POST['slug']);
	$status = 'DEACTIVE';
	$meta_description = mysqli_real_escape_string($connection, $_POST['meta_description']);
	$meta_keyword = mysqli_real_escape_string($connection, $_POST['meta_keyword']);

	$query = mysqli_query($connection, "SELECT * FROM category WHERE title='$title'") or die(mysqli_error($connection));
	$row = mysqli_fetch_array($query);

	if (mysqli_num_rows($query) > 0 ) {
		echo '<h1>' . $title . ' Already Added!</h1>';
	} else {
		mysqli_query($connection, "INSERT INTO category(create_date, title, slug, status, meta_description, meta_keyword) 
								VALUES('$date', '$title', '$slug', '$status', '$meta_description', '$meta_keyword')") or die(mysqli_error($connection));

		header("Location:category.php");
	}


?>