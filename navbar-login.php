
<style>
    @import url("https://fonts.googleapis.com/css?family=Lato:300");
    a.White:visited {
        color:#E95589;
        font-family: Lato,sans-serif;
    }
    a.White:hover{
        color:#FFF;
    }
</style>
<header>
<?php 
  if(!isset($_SESSION["id"])){
?>
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="Star.php"><img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/s261x260/245799487_267531408630886_2729645764553798750_n.png?_nc_cat=111&ccb=1-5&_nc_sid=aee45a&_nc_ohc=SdR8eRCLh24AX8iffW2&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=5bcf13950dee4473d137c76a46870f42&oe=61911213" width="auto" height="60px"></a>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="White nav-link px-2 fw-bolder" title="DashBoard"><i class="bi bi-window me-2"></i>Dashboard</a></li>
        <li><a href="marketplace.php" class="White nav-link px-2 fw-bolder" title="Market"><i class="bi bi-shop-window me-2"></i>Market</a></li>
      </ul>
      <a href="login.php">
        <div div class="text-end">
          <button type="button" class="btn text-white fw-bold" style="background-color:#E95589">Login</button>
        </div>
      </a>   
    </div>
<?php
  }else{
?>
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="Star.php"><img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/s261x260/245799487_267531408630886_2729645764553798750_n.png?_nc_cat=111&ccb=1-5&_nc_sid=aee45a&_nc_ohc=SdR8eRCLh24AX8iffW2&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=5bcf13950dee4473d137c76a46870f42&oe=61911213" width="auto" height="60px"></a>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="White nav-link px-2 fw-bolder" title="DashBoard"><i class="bi bi-window me-2"></i>Dashboard</a></li>
        <li><a href="marketplace.php" class="White nav-link px-2 fw-bolder" title="Market"><i class="bi bi-shop-window me-2"></i>Market</a></li>
      </ul>
      <form class="col-12 text-center col-lg-auto mb-3 mb-lg-0 me-lg-3 text-info">
      <button type="button" class="btn text-white fw-bold" style="background-color:#E95589">
            <?php
              $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
              $sql="SELECT * FROM user WHERE Username='$_SESSION[Username]'";
              $result=$conn->query($sql);
              while($row=$result->fetch()){
                echo $row['Gem']."💎";
              }
              $conn=null;
            ?>
            </button>
        </form>
        <div div class="text-end">
        <ul class="navbar-nav">
            <li class="nav-item">
              <div class="dropdown">
                <button type="button" class="btn text-white fw-bold dropdown-toggle" style="background-color:#E95589" 
                  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-lines-fill"></i>&nbsp;<?php  echo $_SESSION["Username"]?></button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="Profile.php"><i class="bi bi-person-fill"></i> Profile</a></li>
                  <li><a class="dropdown-item" href="logout.php"><i class="bi bi-power"></i> ออกจากระบบ</a></li>
                  </ul>
              </div>
            </li>
        </ul>
          </div> 
    </div>
    <?php 
      }
    ?>
</header>