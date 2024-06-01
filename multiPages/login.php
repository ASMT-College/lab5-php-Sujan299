<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
include('./common/header.php');

?>
<form>
    username: <input type='text'/><br>
    password: <input type='password'/> <br>
    <input type='submit' value='login'/>
    <br>
    Don't have account ? <a href='./signup.php'>Signup</a>
</form>
    
</body>
</html>