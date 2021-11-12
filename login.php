<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <title>LOGIN</title>
    <link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/s261x260/245799487_267531408630886_2729645764553798750_n.png?_nc_cat=111&ccb=1-5&_nc_sid=aee45a&_nc_ohc=SdR8eRCLh24AX8iffW2&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=5bcf13950dee4473d137c76a46870f42&oe=61911213">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
  <div id="stars"></div>
  <div id="stars2"></div>
  <div id="stars3"></div>
  <div class="container">
    <?php include 'navbar-login.php';?>
  <br><br>
          <?php 
            if(isset($_SESSION["add_login"]) && $_SESSION["add_login"] == "error"){
               echo "<div class='alert alert-danger'>ชื่อบัญชีซ้ำหรือฐานข้อมูลปัญหา</div>";
               unset($_SESSION["add_login"]);
            }else if(isset($_SESSION["add_login"]) && $_SESSION["add_login"] == "success"){
               echo "<div class='alert alert-success'>เพิ่มบัญชีเรียบร้อยแล้ว</div>";
               unset($_SESSION["add_login"]);
            }
          ?>
          <?php 
            if(isset($_SESSION["error"])){
                echo "<div class='alert alert-danger'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";
                unset($_SESSION["error"]);
            }
          ?>
    <div class="login">
        <div class="login-html">
          <h1 class="display-5 ms-5">
              <span>Welcome</span>
              <span>Welcome</span>
          </h1><br><br>
              <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
              <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
              <div class="login-form">
                <form action="verify.php" method="POST">
                <div class="sign-in-htm">
                  <div class="group">
                    <label for="user" class="label">Username</label><br>
                    <input id="user" type="text" class="input" name="Username">
                  </div>
                  <div class="group">
                    <label for="pass" class="label">Password</label><br>
                    <input id="pass" type="password" class="input" data-type="password" name="pass">
                  </div>
                  <div style="text-align: end; cursor: pointer">
                    <a href="#" class="White">Forgot Password?</a>
                  </div>
                  <div class="group">
                    <input type="submit" class="button" value="Sign In">
                  </div>
                </div>
                </form>
                <form action="registor_save.php" method="POST">
                
                <div class="sign-up-htm">
                  <div class="group">
                    <label for="user-2" class="label">Username</label><br>
                    <input id="user-2" type="text" class="input" name="Username" required>
                  </div>
                  <div class="group">
                    <label for="pass-2" class="label">Password</label><br>
                    <input id="pass-2" type="password" class="input" data-type="password" name="pass" required>
                  </div>
                  <div class="group">
                    <label for="con-pass-2" class="label">Confirm Password</label><br>
                    <input id="con-pass-2" type="password" class="input" data-type="password" name="pass-check" required>
                  </div>
                  <div class="group">
                    <label for="e-pass" class="label">Email Address</label><br>
                    <input id="e-pass" type="text" class="input" name="Email" required>
                  </div>
                  <div class="group">
                    <input type="submit" class="button" value="Sign Up">
                  </div>
                  <div class="foot-lnk">
                    <label for="tab-1" style="cursor: pointer;">Already Member?</a>
                  </div>
                </div>
                </form>
              </div>
        </div>
    </div>
    <?php include 'footer.html';?>
    </div>
</body>
</html>