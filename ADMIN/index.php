<!DOCTYPE html>

<?php 

	ob_start();
	session_start();
	if (!isset($_SESSION['emailuser'])) {
		header("location:login.php");
	}
 ?>

<html>
<head >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WISATA</title>
</head>
<body>

	<?php include "header.php"; ?>

	<div style="background-color: #eeeeee;" class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Dashboard Admin</h1>
		</div>
	</div>

	<?php include "footer.php"; ?>

</body>

</html>