


<?php include 'header.php'; ?>

    <div class="container">

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="form-group"> 
        <label>username :</label>
<input type="text" class="form-control" name="username"/> 
        </div>
            
<div class="form-group">
        <label>usermail :</label>
<input type="email" class="form-control" name="usermail"/> 
        </div>
            
            
            
<div class="form-group">
        <label>userage :</label>
<input type="number" class="form-control" name="userage"/> 
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
 $username =  $_POST['username'];
 $usermail =  $_POST['usermail'];
 $userpassword =  $_POST['userpassword'];
$userage =  $_POST['userage'];

$q= "insert into users (name , mail , age , password) values ('$username', '$usermail' ,  '$userage', '$userpassword ')";


mysqli_query($con ,$q);

    
header("location:home.php");    
    
    
    
    
    
    
    
    
    
    
    }

    ?>


<?php include 'footer.php'; ?>











