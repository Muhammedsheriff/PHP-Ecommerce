<?php session_start() ?>
<?php


if(!isset($_SESSION['x']))
   {
       header("location:login.php");
   }

$time = $_SERVER['REQUEST_TIME'];

$timeout_duration = 1800;

if (isset($_SESSION['LAST_ACTIVITY']) && 
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    //session_unset();
    session_destroy();

    //session_start();

$sec = "5";
$page = $_SERVER['PHP_SELF'];
header("Refresh:$sec, url='$page'");

}

$_SESSION['LAST_ACTIVITY'] = $time; 

?>
<h2>Home Page </h2>