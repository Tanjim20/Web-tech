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
                    <legend>EDIT PROFILE</legend>
                    <div>
                    <label for="Name">Name: </label>
               <input type="text" name="name" id="name" value="Tanjim" placeholder="Enter Name"> <br> <br> <hr>
               <label for="Email">Email: </label>
               <input type="text" name="email" id="email" value="tanjim@gmail.com" placeholder="Enter Email"> <br> <br> <hr>
               
               <label>Gender</label>
            <input type="radio" id="male" name="gender" value="gender"> 
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="gender">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="gender">
            <label for="other">Other</label>
            <br><br><hr><br><br>
            <input type="submit" value="Submit">
                    </div>
                    
                </fieldset>
            </div>	
		</header>
	</div>
<?php include './Layouts/footer.php'; ?>


</body>
</html>