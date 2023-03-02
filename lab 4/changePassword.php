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
                    <legend>CHANGE PASSWORD</legend>
                    <div>
                    <label for="CurrentPassword">Current Password: </label>
               <input type="password" name="currentPassword" id="currentPassword" placeholder="Enter Current Password"> <br> <br>
               <label for="NewPassword" style="color: green;">New Password: </label>
               <input type="password" name="newPassword" id="newPassword" placeholder="Enter New Password"> <br> <br>
               <label for="RetypePassword" style="color: red;">Retype New Password: </label>
               <input type="password" name="retypePassword" id="retypePassword" placeholder="Enter Retype New Password"> <br> <br>
               
            <br><hr><br>
            <input type="submit" value="Submit">
                    </div>
                    
                </fieldset>
            </div>	
		</header>
	</div>
<?php include './Layouts/footer.php'; ?>


</body>
</html>