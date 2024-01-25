<h3 class="text-center p-4">All Products</h3>
<table class="table table-bordered mt-3">
<thead class="bg-danger">
<tr class="text-center">
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
</thead>
<tbody class="">

<?php

$con = new mysqli('localhost','root','','php_project');
$sql = "select * from `products`";
$result = mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result))
{
    $id = $row['product_id'];
    $name = $row['product_name'];
    $price = $row['product_price'];

    echo 
    "<tr class='text-center'>
    <td>$id</td>
    <td>$name</td>>
    <td>$price</td>
    <td><a href='index.php?edit_product=$id' class='text-dark'><i class='fas fa-pen'></i></a></td>
    <td><a href='index.php?delete_product=$id' class='text-dark'><i class='fas fa-trash'></i></a></td>
    </tr>";
}

?>
</tbody>
</table>
