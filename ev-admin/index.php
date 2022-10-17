<?php
$invalidemail = false;
$invalidpass = false;
include 'config.php';
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

if (isset($_POST["username"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $checkusername = "SELECT * FROM `admin` WHERE `username` = '$username' ";
    $result = mysqli_query($conn, $checkusername);
    $row = mysqli_num_rows($result);
    if ($row == 1) {
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $ap1 = "SELECT * FROM `admin` WHERE `username` = '$username' ";
        $ap2 = mysqli_query($conn, $ap1);
        $ap3 = mysqli_fetch_assoc($ap2);
        // $id = $ap3['admin_id'];
        $checkpass = password_verify($password, $ap3["password"]);
        if ($checkpass) {
            session_start();
            $sql2 = "SELECT * FROM `admin` WHERE `username` = '$username' ";
            $result2 = mysqli_query($conn, $sql2);
            $row = mysqli_fetch_assoc($result2);
            $id = $row['id'];
            $_SESSION['id'] = $id;
            $_SESSION['loggedin'] = true;
            header('location:dashboard.php');
        } else {
            $invalidpass = true;
        }
    } else {
        $invalidemail = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <!-- external css -->
    <link rel="stylesheet" href="./scss/style.css" />
    <!-- tailwing cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ios library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>
  <body>
    <section id="login">
      <!-- container -->
      <div class="containerL">
        <!-- left -->
        <figure class="left">
          <img
            src="./icons/charnet1-01 1.svg"
            alt="location image"
            class="w-12"
          />
        </figure>
        <!-- leftEnd -->

        <!-- right -->
        <main id="loginForm">
          <h1>Admin Login</h1>
          <form method="post">
            <!-- input 1 -->
            <div>
              <label for="username">Username</label>
              <input
                type="text"
                placeholder="Enter your email or phone No."
                id="username"
                name="username"
              />
            </div>
            <!-- input 2 -->
            <div>
              <label for="password">password</label>
              <input
                type="password"
                placeholder="Enter your passowrd"
                id="password"
                name="password"
              />
            </div>
            <button  type="submit" id="loginBtn">login</button>
          </form>
        </main>
        <!-- rightEnd -->
      </div>
      <!-- containerEnd -->
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./js/script.js"></script>
    <script src="./js/auth/login.js"></script>
  </body>
</html>

          
