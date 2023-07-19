<?php
if( isset( $_COOKIE[ 'user' ))
{
    $user = $COOKIE[ 'user' ];
    echo "<h1>Welcome $user !</h1><hr>";
    echo 'Please <a href="cookie_data.php">View Cookie</a>' ;
}
{
    echo 'Please <a href="cookie_set.html">Log In</a>' ;
}
?>

