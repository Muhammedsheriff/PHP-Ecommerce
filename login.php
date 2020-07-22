

<?php session_start(); ?>
<?php include 'header.php'; ?>

    <div class="container">

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            
<div class="form-group">
        <label>usermail :</label>
<input type="email" class="form-control" name="usermail"/> 
        </div>
            
            
<div class="form-group">
        <label>userpassword :</label>
<input type="password" class="form-control" name="userpassword"/> 
        </div>
            
<button name="action" type="submit" class="btn btn-info float-right">register</button>            
            
            
        </form>

    </div>



<?php
    if(isset($_POST['action']))
    {
include 'connection.php';
 $usermail =  $_POST['usermail'];
 $userpassword =  $_POST['userpassword'];    
    $q="select * from users where mail = '$usermail' and password = '$userpassword'";
    $table = mysqli_query($con , $q);
if( mysqli_num_rows($table) > 0)
{
    $_SESSION['x']="true";
    header("location:home.php");
}
else
{
     header("location:login.php");
  
}
    
    }

    ?>


<?php include 'footer.php'; ?>











