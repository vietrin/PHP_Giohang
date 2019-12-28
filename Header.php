<?php
  session_start();

?>
<meta charset="utf-8" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
    * {
  margin: 0;
  padding: 0;
}
 
body {
  font-family: sans-serif;
  color: #333;
}
 
#menu ul {
  background: #1F568B;
  list-style-type: none;
  text-align: left;
}
#menu li {
  color: #f1f1f1;
  display: inline-block;
  width: 120px;
  height: 40px;
  line-height: 40px;
  margin-left: -5px;
}

#menu a {
  text-decoration: none;
  color: #fff;
  display: block;
}
#menu a:hover {
  background: #F1F1F1;
  color: #333;
}
</style>
<?php
  $total=0;
  if (isset($_SESSION['cart'])&&$_SESSION['cart']!=null){
    foreach($_SESSION['cart'] as $list ){
      $total+=1;
    } 
  }

?>
<div id="menu">
    <ul>
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?type='dienthoai'">Điện thoại</a></li>
        <li><a href="index.php?type='mayanh'">Máy ảnh</a></li>
        <li><a href="index.php?type='phukien'">Phụ kiện</a></li>
        <li><a style="text-align: right; " href="ViewCart.php">Giỏ hàng (<?php echo $total;?>) <img src=image\shopping-cart.png ></a></li>
    </ul>
</div>