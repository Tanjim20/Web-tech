<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .header{
            display: flex;
            justify-content: space-around;
            align-items: center;
            border: 2px solid #000;
        }
        .nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav p{
            margin-right: 20px;
            border-right: 2px solid #000;
            padding-right: 10px;
        }
        
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="./IMAGES/logo.jpg">
        </div>
        <div class="nav">
            <p>Logged In As <a href=""><?php echo $_SESSION['email']; ?></a></p>
            <a href="?logout">Logout</a>
    </div>
    </div>
</body>
</html>