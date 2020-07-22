




<?php include 'connection.php' ?>
<?php

    
      
    
    $q = $_GET['q']; // lorem


$sql="SELECT * FROM products where name like '%$q%'";
$result = mysqli_query($con,$sql);


while($product = mysqli_fetch_array($result)) {

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
