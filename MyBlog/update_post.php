<!DOCTYPE html>
<html>
<head>
	<title>MyBlog: modifica-post</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- fonts first -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:300,400,700" rel="stylesheet">

	<!-- Latest compiled and minified Boostrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- our custom css -->
	<link rel="stylesheet" type="text/css" href="css/MyStyle.css">

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- bootbox API-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!-- My Custom Javascript-->
	<script src="js/MyJavascript.js"></script>

</head>

<body>
	<?php require 'includes/database.php'; ?>
	<?php include 'includes/queries.php'; ?>
	<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/content-update_post.php'; ?>
	<?php include 'includes/footer.php'; ?>
</body>
</html>