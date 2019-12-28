<?php require_once 'Header.php' ?>
<h3 style="text-align: center;"> Tất cả sản phẩm </h3>
<?php
  require_once "ListProduct.php";
?>
<div class="container">
  <div class="row">
    <?php foreach ($product as $listProduct) {?>
    <div class="col-3 text-center py-4">
      <div class="w-50 mx-auto" style="height:200px;">
      <img src="<?php echo $listProduct['pic'];?>" alt="" class="w-100">
      </div>
      <h3><?php echo $listProduct['name'];?></h3>
      <p><?php echo number_format($listProduct['price'], 0);?></p>
      <a href="AddCart.php?id=<?php echo $listProduct['id'];?>"> Đặt hàng </a>
    </div>
    <?php } ?>
  </div>
</div>