<?php

if(isset($_GET['delete_product']))
{
    $con = new mysqli('localhost','root','','php_project');
    $id=$_GET['delete_product'];
    $sql="delete from `products` where product_id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert('Deleted successfully');</script>";
    }
}

?>