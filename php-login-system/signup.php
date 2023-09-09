<?php
  include_once 'header.php';
?>
            <section>
                <h2>Sign Up</h2>
                <hr>
                <form action="includes/signup.inc.php" method="post">
                  <input type="text" name="name" placeholder="Full Name..."><br>
                  <input type="text" name="email" placeholder="Email..."><br>
                  <input type="text" name="uid" placeholder="Username..."><br>
                  <input type="password" name="pwd" placeholder="Password..."><br>
                  <input type="password" name="pwdrepeat" placeholder="Repeat Password..."><br>
                  <button type="submit" name="submit">Sign Up</button><br>
                </form>
                <?php
            if(isset($_GET["error"])){
              if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
              }
              else if($_GET["error"] == "invaliduid"){
                echo "Choose a proper username!";
              }
              else if($_GET["error"] == "invalidemail"){
                echo "Choose a proper email!";
              }
              else if($_GET["error"] == "passwordsdontmatch"){
                echo "Passwords dosn't match!";
              }
              else if($_GET["error"] == "usernametaken"){
                echo "Username already taken!";
              }
              else if($_GET["error"] == "none"){
                echo "You have signed up!";
              }
            }
            ?>
            </section>

 <?php
    include_once 'footer.php';
 ?>