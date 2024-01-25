<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheSneakerShop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="assets\css\style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
      <a class="nav-home" href="home.php" role="button">
        <h2 class="home">TheSneakerShop</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="account.php">User</a>
          </li>
          </a>

        </ul>
      </div>
    </div>
  </nav>


      <section class="container single my-1 pt-1">
        <div class="row mt-5">

          <?php
    
    session_start();

    if(isset($_GET['product_id']))
    {
    $id = $_GET['product_id'];
    $con = new mysqli('localhost','root','','php_project');
    $sql = "select * from `products` where product_id = $id";
    $result = mysqli_query($con,$sql);

          
    while($row = mysqli_fetch_assoc($result)){
            
            $brand = $row['product_brand'];
            $name = $row['product_name'];
            $desc = $row['product_desc'];
            $price = $row['product_price']; 
            $img = $row['product_img'];
            $img2 = $row['product_img2'];
            $img3 = $row['product_img3'];
            $img4 = $row['product_img4'];
      
            echo "<div class='col-lg-5 col-md-6 col-sm-12'>
              <img class='img-fluid w-100 pb-1' id='mainImg' src='assets/imgs/$name/$img'/>
              <div class='small-img-group'>

                  <div class='small-img-col'>
                      <img width='100%' src='assets/imgs/$name/$img2'/>
                  </div>
                  <div class='small-img-col'>
                      <img width='100%' src='assets/imgs/$name/$img3'/>
                  </div>
                  <div class='small-img-col'>
                      <img width='100%' src='assets/imgs/$name/$img4'/>  
                  </div>
              </div>
          </div>
          <div class='col-lg-6 col-md-12 col-sm-12'>
              <h6>$brand</h6>
              <h3 class='py-4'>$name</h3>
              <h2>$price ₹</h2>
              <br>
              <a href='checkout.php'>
              <button class='buy-btn'>Buy Now</button>
              </a>
              <h4 class='mt-5 mb-5'>Product details</h4>
              <span>$desc</span>
          </div>";
    }
  }

          ?>

          <?php
          
          $sql = "select * from `products` where product_id = $id";
          $result = mysqli_query($con,$sql);
          $row = mysqli_fetch_assoc($result);
          $price = $row['product_price'];
          $pname = $row['product_name'];
          $_SESSION['price']=$price;
          $_SESSION['pname']=$pname;
          
          ?>
   
        </div>
      </section>

      <section id="related-products" class="my-1 pb-5">
        <div class="container text-center mt-5 py-5">
          <h3>Related products</h3>
        </div>
        <div class="row mx-auto container-fluid">
          
        <?php
    
    $con = new mysqli('localhost','root','','php_project');
    $sql = "select * from `products` order by rand() limit 0,4";
    $result = mysqli_query($con,$sql);
    
    while($row = mysqli_fetch_assoc($result))
    {
      $id = $row['product_id'];
      $brand = $row['product_brand'];
      $name = $row['product_name'];
      $desc = $row['product_desc'];
      $price = $row['product_price']; 
      $img = $row['product_img'];

      echo "<div class='product text-center col-lg-3 col-md-4 col-sm-12'>
      <img class='img-fluid' src='assets/imgs/$name/$img'>
      <h5 class='p-brand'>$brand</h5>
      <h4 class='p-name'>$name</h4>
      <div class='star'>
      <i class='fas fa-star'></i>
      <i class='fas fa-star'></i>
      <i class='fas fa-star'></i>
      <i class='fas fa-star'></i>
      <i class='fas fa-star'></i>
    </div><br>
      <h4 class='p-price'>$price</h4>
      <a class='btn' href='single_product.php?product_id=$id'>
      <button class='buy-button'>Buy Now</button></a>
    </div>";
    }

    ?>
        
        </div>
      </section>


    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
      
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
      
          <!-- Section: Form -->
          <section class="">
            <form action="">
              <!--Grid row-->
              <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-auto">
                  <p class="pt-2">
                    <strong>Sign up for our giveaways</strong>
                  </p>
                </div>
                <!--Grid column-->
      
                <!--Grid column-->
                <div class="col-md-5 col-20">
                  <!-- Email input -->
                  <div class="form-outline form-white mb-4">
                    <input type="email" id="form5Example21" class="form-control"/>
                    <br>Enter E-mail ID Here
                  </div>
                </div>
                <!--Grid column-->
      
                <!--Grid column-->
                <div class="col-auto">
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-outline-light mb-4">
                    Subscribe
                  </button>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </form>
          </section>
          <!-- Section: Form -->
      
          <!-- Section: Text -->
          <section class="mb-4">
            <p>
              All the participants in the giveaway of the Air Jordan 1's and Panda Dunks Low will recieve a mail to the given email id.
              <br>Every participant should share our website on their Facebook, Instagram and Twitter accounts 
              <br>in order to have the maximum chance at winning.
              <br>Make sure you tag us in your posts !!!   
            </p>
          </section>
          <!-- Section: Text -->
      
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">TheSneakerShop.com</a>
        </div>
        <!-- Copyright -->
      </footer>

      <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script>
      var mainImg = document.getElementById("mainImg");
      var smallImg = document.getElementsByClassName("small-img-col");

      for(let i=0; i<4; i++)
      {
       smallImg[i].onclick = function()
       {
         mainImg.src = smallImg[i].src;
       }
      } 

    </script>
</body>
</html>