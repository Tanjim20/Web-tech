<?php require("login.class.php") ?>
<?php 
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['email'], $_POST['password']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
	<title>Log in form</title>
</head>
<style>
	.container{
        border-left: 2px solid #000;
        border-right: 2px solid #000;
        padding-top: 100px;
        padding-bottom: 100px;
        padding-left: 60px;
        padding-right: 60px;
    }
	.error{
	  margin-top: 30px;
	  color: red;
	  font-size: 20px;
	  font-weight: 900;
    }
     
    .success{
     	margin-top: 30px;
     	color: green;
		font-size: 20px;
	    font-weight: 900;
    }
</style>
<body>
<?php include 'Layouts/header.php'; ?>

<div class="container">
        <p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
           <fieldset>
               <legend for="Login">Login</legend>

               <label for="Email">Email: </label>
               <input type="text" name="email" id="email" placeholder="Enter Email"> <br> <br> 
               
               <label for="password">Password:</label>
               <input type="password" id="password" name="password" placeholder="Enter Password"><br><br><hr>

               <input type="checkbox">Remember me <br><br>
               <input type="submit" value="Submit" name="submit">
               <a href="forgotPassword.php">Forgot Password?</a>
            </fieldset><br><br>

			<p>Don't have any account?<a href="./registration.php"> Register</a></p>

            
       </form>
</div>
<?php include 'Layouts/footer.php'; ?>


		

		

</body>
</html>