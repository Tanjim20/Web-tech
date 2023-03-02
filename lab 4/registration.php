<?php require("register.class.php") ?>
<?php
	if(isset($_POST['submit'])){
		$user = new RegisterUser($_POST['name'], $_POST['email'], $_POST['password']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="styles.css">
	<title>Register form</title>
	
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
               <legend for="Registration">Registration</legend>
               <label for="Name">Name: </label>
               <input type="text" name="name" id="name" placeholder="Enter Name"> <br> <br> <hr>
               <label for="Email">Email: </label>
               <input type="text" name="email" id="email" placeholder="Enter Email"> <br> <br> <hr>
               <label for="password">Password:</label>
               <input type="password" id="password" name="password" placeholder="Enter Password"><br><br> <hr> 
               <label for="cpassword">Confirm Password:</label>
               <input type="password" id="cpassword" name="cpassword" placeholder="Enter Confirm Password"><br><br>
           </fieldset>
            <fieldset>
            <legend>Gender</legend>
            <input type="radio" id="male" name="gender" value="gender"> 
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="gender">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="gender">
            <label for="other">Other</label>
            </fieldset>

            <br> <br>


            <input type="submit" value="Submit" name="submit"> <br> <br>

            <p>Already have an account. <a href="./login.php">Login</a></p>

            

       </form>
</div>
<?php include 'Layouts/footer.php'; ?>

</body>
</html>