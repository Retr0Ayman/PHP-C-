<?php session_start();?>
<?php
function reject($entry)

{
    echo "Invalid $entry <br>";
    echo 'Please <a href="session_form.html"> Login </a>';
    exit();
}
If (isset($_POST['user']))
{   $user=trim($_POST['user']);
    if (!ctype_alpha($user)){reject(‘User Name’);}
	if (isset($_POST[‘pass’]))
	{	$pass=trim($_POST[‘pass’]);
		if (!preg_match(/^[A-Za-z0-9._]{8,}$/’, $pass))
             reject ('Password');
		else
		{ $_SESSION[‘user’]=$user;
		  $_SESSION[‘pass’]=$pass;
		}}}
else {header(‘location:session_form.html’);}
?>
 