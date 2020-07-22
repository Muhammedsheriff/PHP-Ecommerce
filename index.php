




<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<?php include 'connection.php'; ?>

<div class="container text-center">
    <div class="row no-gutters" id="reSult">
<?php

$q = "select * from products";
$table = mysqli_query($con , $q);

while($product = mysqli_fetch_array($table))
{
  echo'<div class="col-sm-3">

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
  ';
  if($product['onsale']==1)
  {
echo '  <div class="ribbon">sale</div>';
}
  
  echo '</div>
  </a>


</div>';



}

?>




     </div>
  </div>




<?php include 'footer.php'; ?>
