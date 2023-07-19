<?php
If (isset($_SESSION[‘user’]))
{
$user=$_SESSION[‘user’];
echo “<h1>Welcome $user !</h1><hr>”;
echo ‘<a href=”session_data.php”> View Session </a>’;
}
else
{echo ‘Please <a href="session_form.html”> 
Login </A>’:}
?>
