<?php
   require_once 'Header.php' ;
?>
<meta charset="utf-8" />
<h3 style="text-align: center;"> Thông tin giỏ hàng</h3>
<?php 
    if(isset($_SESSION['cart']) && $_SESSION['cart']!=null){
        echo"<form action='updateProduct.php' method='post'>";
        echo "<table class='table mt-5'>
        <thead class='thead-dark'>";
        echo "<tr>";
        echo "<td>Tên sản phẩm </td>";
        echo "<td>Số lượng </td>";
        echo "<td>Giá </td>";
        echo "<td>Thành tiền </td>";
        echo "<td> Xóa </td>";
        echo "</tr> </thead>";
        $tongtien =0;
        foreach($_SESSION['cart'] as $list){
            echo " <tr>";
            echo " <td>".$list['name']."</td>";
            echo " <td><input type='text' name='qty[".$list['id']."]' value='".$list['qty']."'/></td>";
            echo " <td>".$list['price']."</td>";
            echo " <td>".($list['qty']*$list['price'])."</td>";
            echo " <td><a href='RemoveProduct.php?id=".$list['id']."'>Xoa </a> </td>";
            echo " </tr>";
            $tongtien+=$list['price']*$list['qty'];
        }
        echo "</table><div class='modal-footer'>";
        echo "<h4>Tổng tiền: $tongtien</h4></div>";
        echo "<p align='right' style='width=600px; '>
        <input type='submit' value='Cập nhập' name='btnupdate'/>
        </p>";
        echo"</form>";
    }
?>