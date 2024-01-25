<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
      <a class="nav-home" href="/project/home.php" role="button">
        <h2 class="home">TheSneakerShop</h2>
      </a>

      <div class="container text-end">
            <h4>Welcome Admin</h4>
            <a href="/project/index.php" class="logout">
                Logout
            </a>
      </div>
    </div>
  </nav>

  <div class="row">
    <div class="col-lg-12 col-md-6 col-sm-4 p-2">
        <div class="container">
            <h3 class="py-5 text-center">Manage details</h3>
        </div>

        <div class="button text-center">
            <a href="index.php?insert_product" class="nav-item my-2">
                <button>Insert Products</button>
            </a>
            <a href="index.php?view_product" class="nav-item my-2">
                <button>View Products</button>
            </a>
            <a href="index.php?all_orders" class="nav-item my-2">
                <button>All Orders</button>
            </a>
            <a href="index.php?list_users" class="nav-item my-2">
                <button>List users</button>
            </a>
        </div>

    </div>
  </div>

<div class="container">
<?php

if(isset($_GET['insert_product']))
{
    include('insert_product.inc.php');
}
if(isset($_GET['view_product']))
{
    include('view_product.inc.php');
}
if(isset($_GET['edit_product']))
{
    include('edit_product.inc.php');
}
if(isset($_GET['delete_product']))
{
    include('delete_product.inc.php');
}
if(isset($_GET['all_orders']))
{
    include('all_orders.inc.php');
}
if(isset($_GET['list_users']))
{
    include('list_users.inc.php');
}
?>
</div>

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>