


<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'connection.php'; ?>
<?php
$productid= $_GET['myid'];

$q= "select * from products where id = '$productid'";
$table = mysqli_query($con , $q);

$product = mysqli_fetch_array($table);
$categoryId = $product['categoryid'];
echo '
<div class="container">
    <div class="row">
        
    
    <div class="col-md-3">
    <img class="img-fluid" src="'.$product['imgpath'].'"/>

    </div>
    <div class="col-md-9">
    <h2 class="text-info">'.$product['name'].'</h2>
    <p>'.$product['description'].'</p>
    <h4><span class="text-info">price :</span>'.$product['price'].'</h4>
    <p>quantity : '.$product['quantity'].'</p>
    </div>


    </div>
</div>

';
?>
<div class="owl-carousel owl-theme">


<?php


$q= "select * from products where categoryid = '$categoryId'";
$table = mysqli_query($con , $q);

while($product = mysqli_fetch_array($table))
{
    echo '<div class="item">
    
    
  <a href="singleproduct.php?myid='.$product['id'].'">
  <div class="product">
    <div class="product-outer">
    <img src="'.$product['imgpath'].'" class="img-fluid"/>
    <div class="product-desc">
<p>'.substr($product['description'],0,100).'</p>
</div>
</div>
  <h3 class="text-info">'.$product['name'].' </h3>        
  <span>'.$product['price'].'</span>
  </div>
  </a>

    
    </div>    ';
}


?>



</div>










<?php include 'footer.php'; ?>
