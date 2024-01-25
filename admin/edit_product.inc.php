<?php

if(isset($_GET['edit_product']))
{
    $con = new mysqli('localhost','root','','php_project');
    $id=$_GET['edit_product'];
    $sql="select * from `products` where product_id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $brand = $row['product_brand'];
    $name = $row['product_name'];
    $desc = $row['product_desc'];
    $price = $row['product_price']; 
    $img = $row['product_img'];
    $img2 = $row['product_img2'];
    $img3 = $row['product_img3'];
    $img4 = $row['product_img4'];
}

?>

<div class="container p-4">
    <h3 class="text-center">Edit Products</h3>
    <form action="" method="post" class="mb-2" enctype="multipart/form-data">
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="product_brand" class="form-label">Brand name</label>
        <input type="text" name="product_brand" value="<?php echo $brand ?>" id="product_brand" class="form-control" required>
    </div>

    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="product_name" class="form-label">Product name</label>
        <input type="text" name="product_name" value="<?php echo $name ?>" id="product_name" class="form-control" required>
    </div>

    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="product_desc" class="form-label">Product Description</label>
        <input type="text" name="product_desc" value="<?php echo $desc ?>" id="product_desc" class="form-control" required>
    </div>

    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="product_img" class="form-label">Main image</label>  
        <input type="file" name="product_img" id="product_img" class="form-control" required>
    </div>
    
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="product_img2" class="form-label">image 2</label>
        <input type="file" name="product_img2" id="product_img2" class="form-control" required>
    </div>
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="product_img3" class="form-label">image 3</label>
        <input type="file" name="product_img3" id="product_img3" class="form-control" required>
    </div>
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="product_img4" class="form-label">image 4</label>
        <input type="file" name="product_img4" id="product_img4" class="form-control" required>
    </div>

    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="product_price" class="form-label">Product price</label>
        <input type="number" name="product_price" value="<?php echo $price ?>" id="product_price" class="form-control" required>
    </div>

    <div class="form-outline text-center container mb-4 w-50">
        <input type="submit" class="insert" name="edit_product" value="UPDATE">
    </div>
</form>
</div>

<?php

if(isset($_POST['edit_product']))
{
    $new_brand = $_POST['product_brand'];
    $new_name = $_POST['product_name'];
    $new_desc = $_POST['product_desc'];
    $new_price = $_POST['product_price']; 
    $new_img = $_FILES['product_img']['name'];
    $new_img2 = $_FILES['product_img2']['name'];
    $new_img3 = $_FILES['product_img3']['name'];
    $new_img4 = $_FILES['product_img4']['name'];

    $new_sql="update `products` set product_brand='$new_brand', product_name='$new_name', product_desc='$new_desc', product_price='$new_price', product_img='$new_img', product_img2='$new_img2', product_img3='$new_img3', product_img4='$new_img4' where product_id=$id";
    $new_result=mysqli_query($con,$new_sql);

    if($new_result)
    {
        echo "<script>alert('Updated successfully');</script>";
    }

}
?>
