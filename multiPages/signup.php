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
    Confirm Password: <input type='password'/> <br>
    <input type='submit' value='signup'/>
    <br>
    Already have account ? <a href='./login.php'>Login</a>
</form>
    
</body>
</html>