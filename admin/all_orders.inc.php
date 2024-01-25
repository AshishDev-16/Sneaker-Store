<h3 class="text-center p-4">All Products</h3>
<table class="table table-bordered mt-3">
<thead class="bg-danger">
<tr class="text-center">
    <th>Order ID</th>
    <th>Product Name</th>
    <th>Order Price</th>
    <th>User name</th>
    <th>User address</th>
    <th>Order date</th>
</tr>
</thead>
<tbody>

<?php

$con = new mysqli('localhost','root','','php_project');
$sql = "select * from `orders`";
$result = mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result))
{
    $id = $row['order_id'];
    $name = $row['product_name'];
    $price = $row['order_cost'];
    $user = $row['user_name'];
    $addr = $row['user_address'];
    $date = $row['order_date'];


    echo 
    "<tr class='text-center'>
    <td>$id</td>
    <td>$name</td>
    <td>$price</td>
    <td>$user</td>
    <td>$addr</td>
    <td>$date</td>
    </tr>";
}

?>
</tbody>
</table>