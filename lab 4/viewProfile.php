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
	<title>View Profile</title>
</head>
<style>
	.content{
		border-right: 2px solid #000;
	}
	header{
		display:flex;
		gap: 30px;
	}
    fieldset{
        width: 500px;
        display: flex;
    }
    .img{
        width: 200px;
        height: 200px;
        margin-bottom: 20px;
    }
    .img img{
        width: 100%;
        height: 100%;
    }

</style>
<body>

<?php include './Layouts/topbar.php'; ?>

	<div class="content">
		<header>
           <?php include './Layouts/sidebar.php'; ?>
			
			<div>
                <fieldset>
                    <legend>PROFILE</legend>
                    <div>
                        <h3>Name  <span>:Tanjim</span></h3><hr>
                        <h3>Email  <span>:Tanjim@aiub.edu</span></h3><hr>
                        <h3>Gender  <span>:Male</span></h3><hr>
                        <a href="">Edit Profile</a>
                    </div>
                    <div class="img">
                        <img src="./IMAGES/user.png" alt="">
                        <a href="">Change</a>
                    </div>
                </fieldset>
            </div>	
		</header>
	</div>
<?php include './Layouts/footer.php'; ?>


</body>
</html>