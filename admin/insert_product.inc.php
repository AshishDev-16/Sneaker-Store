<?php

if(isset($_POST['insert_product']))
{
    $con = new mysqli('localhost','root','','php_project');
    $brand = $_POST['product_brand'];
    $name = $_POST['product_name'];
    $desc = $_POST['product_desc'];
    $price = $_POST['product_price']; 

    $img = $_FILES['product_img']['name'];
    $img2 = $_FILES['product_img2']['name'];
    $img3 = $_FILES['product_img3']['name'];
    $img4 = $_FILES['product_img4']['name'];
   
    $sql="insert into `products` (product_brand,product_name,product_desc,product_img,product_img2,product_img3,product_img4,product_price) values ('$brand','$name','$desc','$img','$img2','$img3','$img4','$price')"; 

    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo "<script>alert('Product inserted successfully');</script>";
    }
    else
    {
        echo "<script>alert('Product could not be inserted');</script>";
    }
}

?>



<h3 class="text-center p-4">Insert Products</h3>

<form action="" method="post" class="mb-2" enctype="multipart/form-data">
    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="product_brand" class="form-label">Brand name</label>
        <input type="text" name="product_brand" placeholder="Enter Brandname" id="product_brand" class="form-control" required>
    </div>

    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="product_name" class="form-label">Product name</label>
        <input type="text" name="product_name" placeholder="Enter Productname" id="product_name" class="form-control" required>
    </div>

    <div class="form-outline w-50 mb-4 m-auto container">
        <label for="product_desc" class="form-label">Product Description</label>
        <input type="text" name="product_desc" placeholder="Enter Description" id="product_desc" class="form-control" required>
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
        <input type="number" name="product_price" id="product_price" class="form-control" required>
    </div>

    <div class="form-outline text-center container mb-4 w-50">
        <input type="submit" class="insert" name="insert_product" value="INSERT">
    </div>
</form>
