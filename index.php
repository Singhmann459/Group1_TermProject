<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>Restaurant</title>
</head>
<body class="">
    
    <div class="container">
        <header>
            <h1>Foodies</h1>
            <div class="shopping">
                <img src="shopping.svg">
                <span class="quantity">0</span>
            </div>
        </header>

        <div class="list">
          
        </div>
    </div>
    <div class="cart">
        <h1>Card</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>
    <a href="logout.php" class="btn btn-warning">Logout</a>

    <script src="app.js"></script>
</html>