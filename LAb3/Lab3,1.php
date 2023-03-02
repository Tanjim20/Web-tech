<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["password"])) {
    $password = "";
  } else {
    $password = test_input($_POST["password"]);
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<from>
    
    <Table border="0" >
        <tr height="70px" width="100px" align="right">
            
        </tr>
        <tr height="100px" width="125px" >
            <td>
            <fieldset>
            <h2>Login page</h2>


            
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  
Password: <input type="password" name="password"><br>
<input type="checkbox" name="agree"> Remember password <br>
<button>submit</button> <a href="second.html"> Forget password</a>
</from>

<?php
echo "<h2>Input:</h2>";
echo $name;
echo "<br>";
echo $password;
echo "<br>";

?>



</body>
</html>