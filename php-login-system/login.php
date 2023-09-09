<?php
  include_once 'header.php';
?>
            <section>
                <h2>Log In</h2>
                <hr>
                <form action="includes/login.inc.php" method="post">
                  <input type="text" name="uid" placeholder="Username/Email..."><br>
                  <input type="password" name="pwd" placeholder="Password..."><br>
                  <button type="submit" name="submit">Log In</button><br>
                </form>
              <?php
                if(isset($_GET["error"])){
              if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
              }
              else if($_GET["error"] == "wronglogin"){
                echo "Incorect Username or Password";
              }
            }
            ?>
            </section>

 <?php
    include_once 'footer.php';
 ?>