<?php
require_once (__DIR__ . "/../model/config.php");
//pulls configuration database data
require_once (__DIR__ . "/../controller/login-verify.php");

if(!authenticateUser()){
    header("Location: " . $path . "index.php");           
    die();
}

?>
<h1>Compose</h1>

<?php
// The message

?>

<form method="post" action='<?php echo $path . "controller/create-post.php" ?>'>
    <p>Email adress: <input type="text" name="email" size="30"></p>
    
    <p>Subject: <input type="text" name="email" size="30"></p>
    <p>message:</p>
    <p><textarea rows="10" cols="20" name="message"></textarea></p>
    <input type="submit" name="submit" value="submit">
             
</form>-->

