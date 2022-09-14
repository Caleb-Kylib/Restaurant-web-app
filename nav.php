<?php
session_start();
require './database/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                
            <a href="index.php" title="">
                    <strong>
                      <p>Caleb's Cafe</p>
                    </strong>
            </div>

            <div class="menu text-right">
                <ul>
                    <?php
                        if (isset($_SESSION['login_user2'])) {
                            $username= $_SESSION['login_user2'];
                                ?>
                                   <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class=""></span> Welcome <?php echo $_SESSION['login_user2'];?></a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="reserve.php">Reservations</a>
                    </li>
                    <li>
                        <a href="cart.php"></span> Cart
                        (<?php
                                        if(isset($_SESSION["cart"])){
                                            $count = count($_SESSION["cart"]); 
                                        echo "$count"; 
                                        }
                                        else
                                        echo "0";
                                        ?>)</a>
                    </li>
                    <li>
                        <a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
                    </li>
                   <?php } else{?>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="reserve.php">Reservations</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Login</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
            <?php } ?>
        </div>
    </section>
            
 

       