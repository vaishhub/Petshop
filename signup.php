<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <style>
        /* Integrated CSS Code */
        /* fonts  */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(rgba(0, 100, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/background.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .box {
            background: #000;
            color: #00ff00; /* Green text */
            display: flex;
            flex-direction: column;
            padding: 35px 35px;
            border-radius: 20px;
            box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1), 0 32px 64px -48px rgba(0, 0, 0, 0.5);
        }

        .form-box {
            width: 450px;
            margin: 50px 10px;
        }

        .form-box header {
            font-size: 40px;
            font-weight: 600;
            text-align: center;
            color: #29631d;
        }

        .form-box hr {
            background-color: #29631d;
            height: 5px;
            width: 20%;
            border: none;
            margin: 5px auto;
            outline: 0;
            border-radius: 5px;
        }

        .input-container {
            display: flex;
            width: 80%;
            margin-bottom: 15px;
        }

        .icon {
            padding: 15px;
            background: ;
            color: #555;
            background-color: #f1f1f1;
            min-width: 50px;
            text-align: center;
            cursor: pointer;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            height: 50px;
            outline: none;
            border: none;
            font-size: 15px;
            background-color: #f1f1f1;
        }

        .input-field:focus {
            color: #2B547E;
        }

        .btn {
            height: 45px;
            width: 80%;
            background-color: #2B547E;
            border: 0;
            border-radius: 5px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s;
            padding: 0 15px;
            margin: auto;
        }

        .btn:hover {
            opacity: 0.7;
        }

        .links {
            margin: 25px;
            text-align: center;
        }

        .links a {
            text-decoration: none;
            color: #2B547E;
        }

        .links a:hover {
            font-weight: bold;
        }

        .message {
            text-align: left;
            padding: 15px 0px;
            color: rebeccapurple;
        }

        /* home page  */
    </style>
</head>

<body>
  <div class="container">
    <div class="form-box box">


      <header>Sign Up</header>
      <hr>

      <form action="#" method="POST">


        <div class="form-box">

          <?php

          session_start();

          include "connection.php";

          if (isset($_POST['register'])) {

            $name = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $cpass = $_POST['cpass'];


            $check = "select * from users where email='{$email}'";

            $res = mysqli_query($conn, $check);

            $passwd = password_hash($pass, PASSWORD_DEFAULT);

            $key = bin2hex(random_bytes(12));




            if (mysqli_num_rows($res) > 0) {
              echo "<div class='message'>
        <p>This email is used, Try another One Please!</p>
        </div><br>";

              echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";


            } else {

              if ($pass === $cpass) {

                $sql = "insert into users(username,email,password) values('$name','$email','$passwd')";

                $result = mysqli_query($conn, $sql);

                if ($result) {

                  echo "<div class='message'>
      <p>You are register successfully!</p>
      </div><br>";

                  echo "<a href='login.php'><button class='btn'>Login Now</button></a>";

                } else {
                  echo "<div class='message'>
        <p>This email is used, Try another One Please!</p>
        </div><br>";

                  echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
                }

              } else {
                echo "<div class='message'>
      <p>Password does not match.</p>
      </div><br>";

                echo "<a href='signup.php'><button class='btn'>Go Back</button></a>";
              }
            }
          } else {

            ?>

            <div class="input-container">
              <i class="fa fa-user icon"></i>
              <input class="input-field" type="text" placeholder="Username" name="username" required>
            </div>

            <div class="input-container">
              <i class="fa fa-envelope icon"></i>
              <input class="input-field" type="email" placeholder="Email Address" name="email" required>
            </div>

            <div class="input-container">
              <i class="fa fa-lock icon"></i>
              <input class="input-field password" type="password" placeholder="Password" name="password" required>
              <i class="fa fa-eye icon toggle"></i>
            </div>

            <div class="input-container">
              <i class="fa fa-lock icon"></i>
              <input class="input-field" type="password" placeholder="Confirm Password" name="cpass" required>
              <i class="fa fa-eye icon"></i>
            </div>

          </div>


          <center><input type="submit" name="register" id="submit" value="Signup" class="btn"></center>


          <div class="links">
            Already have an account? <a href="login.php">Signin Now</a>
          </div>

        </form>
      </div>
      <?php
          }
          ?>
  </div>

  <script>
    const toggle = document.querySelector(".toggle"),
      input = document.querySelector(".password");
    toggle.addEventListener("click", () => {
      if (input.type === "password") {
        input.type = "text";
        toggle.classList.replace("fa-eye-slash", "fa-eye");
      } else {
        input.type = "password";
      }
    })
  </script>
</body>

</html>