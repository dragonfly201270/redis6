<?php
session_start();
$expireAfter = 1;

echo "This is index page.<br>";

if(isset($_SESSION['user']))
{
	echo "Hello ".$_SESSION['user'];
	//Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['user'];
    
    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;
    
    //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        session_destroy();
    }
}
else
{
	header("Location:login.php");
	//redirect to login
}
?>
