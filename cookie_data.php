<?phpif(count( $COOKIE ) > 0 )
{
    echo '<dl> ';
    foreach( $_COOKIE as $key => $value )
    {
        echo "<dt>Key: $key" ;
        echo "<dd>Value: $value"
    }
    echo '</dl><hr>';
    var_dump( $_COOKIE) ;
}
else{
    echo 'Please <a href="cookie_form.hmtl">Log In</a>' ;
}
?>
