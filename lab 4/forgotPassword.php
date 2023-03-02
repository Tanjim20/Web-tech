<?php require("forgotPassword.class.php") ?>
<?php 
	if(isset($_POST['submit'])){
		$user = new forgetPasswordU($_POST['email']);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
</head>
<body>
    <?php include 'Layouts/header.php'; ?>
    <div class="container">
    <p class="error"><?php echo @$user->error ?></p>
	<p class="success"><?php echo @$user->success ?></p>
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">

           <fieldset>
               <legend for="Login">Forgot Password</legend>

               <label for="Email">Email: </label>
               <input type="text" name="email" id="email" placeholder="Enter Email"> <br> <br> 
               <hr>
               <input type="submit" value="Submit" name="submit">
            </fieldset>

            
       </form>

    </div>
    <?php include 'Layouts/footer.php'; ?>
</body>
</html>
