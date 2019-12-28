<?php 
    session_start();
    $_SESSION['cart'];
    if(isset($_POST['btnupdate'])){
        foreach($_POST['qty'] as $key=>$val){
            $_SESSION['cart'] [$key]['qty']=$val;
        }
    }
    header("location:ViewCart.php");
?>