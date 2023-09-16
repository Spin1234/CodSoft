<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            /* height: 100vh;
            background-image: url("pxfuel.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%; */
            background-color: #ccc;
        }
        .container {
        max-width: 300px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
      }
      .form-group {
        margin-bottom: 10px;
      }
      label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }
      input[type="password"],
      input[type="email"],
      select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        background-color: transparent;
      }
      button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
      }
    </style>
</head>
<body>
  <center style="padding:20px;"><strong style="color: red;"><?php if(isset($_GET['m'])){echo $_GET['m'];} ?></strong></center>
  <div style="margin: 40px auto; display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
    <h2>Login Here</h2>
    </div>
    <div class="container">
    <?php
        if (isset($_GET['em'])) {
            echo "<p style='color: red;'>". $_GET['em']. "</p>";
        }
        ?>
        <form action="loginDb.php" method="post">
          <!-- <div
            style="
              background-image: url('logo-poster-1.jpg');
              height: 70px;
              background-repeat: no-repeat;
              background-size: 100% 100%;
            "
          ></div> -->
          <div class="form-group">
            <label for="Email">Email:</label>
            <input type="email" id="Email" name="email" required />
            
          </div>
          <div class="form-group">
            <label for="Password">Password:</label>
            <input type="password" id="Password" name="password" required />
            <a style="text-decoration: none;" href="">Forgot password?</a>
          </div>
          <button type="submit">Login</button> New user? <a style="text-decoration: none;" href="register.html">Register here</a>
        </form>
      </div>
</body>
</html>