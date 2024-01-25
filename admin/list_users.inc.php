<h3 class="text-center p-4">All Products</h3>
<table class="table table-bordered mt-3">
<thead class="bg-danger">
<tr class="text-center">
    <th>User ID</th>
    <th>User Name</th>
    <th>User email</th>
</tr>
</thead>
<tbody>

<?php

$con = new mysqli('localhost','root','','php_project');
$sql = "select * from `users`";
$result = mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result))
{
    $id = $row['user_id'];
    $name = $row['user_name'];
    $email = $row['user_email'];

    echo 
    "<tr class='text-center'>
    <td>$id</td>
    <td>$name</td>
    <td>$email</td>
    </tr>";
}

?>
</tbody>
</table>