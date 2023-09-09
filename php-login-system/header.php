<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta cahrset="utf-8">
        <title>PHP Project 01</title>
    </head>
    <body>

    <nav>
        <div class="wrapper">
            <a href="index.php"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php">About Us</a></li>
                <li><a href="blog.php">Find Blogs</a></li>
                <?php
                   if(isset($_SESSION["useruid"])){
                    echo "<li><a href='profile.php'>Profile Page</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                   }
                   else{
                    echo "<li><a href='signup.php'>SignUp</a></li>";
                    echo "<li><a href='login.php'>LogIn</a></li>";
                   }
                ?>
            </ul>
        </div>
    </nav>

        <div class="wrapper">