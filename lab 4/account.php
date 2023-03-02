<?php 
	session_start();
	if(!isset($_SESSION['email'])){
		header("location: login.php");	exit();
	}
	if(isset($_GET['logout'])){
		unset($_SESSION['email']);
		header("location: login.php");	exit();
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
	<title>User account</title>
</head>
<style>
	.content{
		border-right: 2px solid #000;
	}
	header{
		display:flex;
		gap: 30px;
	}
</style>
<body>

<?php include './Layouts/topbar.php'; ?>

	<div class="content">
		<header>
           <?php include './Layouts/sidebar.php'; ?>
			
			<h2>Welcome <?php echo $_SESSION['email']; ?><h2>	
		</header>
	</div>
<?php include './Layouts/footer.php'; ?>


</body>
</html>