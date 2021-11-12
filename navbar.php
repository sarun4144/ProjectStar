<link rel="stylesheet" href="BG.css">
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
    session_start();
?>
<?php 
    if(!isset($_SESSION["id"])){
?>
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="Star.php"><img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/s261x260/245799487_267531408630886_2729645764553798750_n.png?_nc_cat=111&ccb=1-5&_nc_sid=aee45a&_nc_ohc=SdR8eRCLh24AX8iffW2&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=5bcf13950dee4473d137c76a46870f42&oe=61911213" width="auto" height="60px"></a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="White nav-link px-2 fw-bolder" title="DashBoard"><i class="bi bi-window me-2"></i>Dashboard</a></li>
          <li><a href="#" class="White nav-link px-2 fw-bolder" title="Market"><i class="bi bi-shop-window me-2"></i>Market</a></li>
        </ul>
        <?php echo $_SESSION["id"]?>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
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
          <li><a href="#" class="White nav-link px-2 fw-bolder" title="Market"><i class="bi bi-shop-window me-2"></i>Market</a></li>
        </ul>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
        <a href="login.php">
          <div div class="text-end">
              <li class="nav-item">
                    <div class="dropdown">
                        <a  class="btn btn-outline-secondary dropdown-toggle btn-sm" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-lines-fill"></i>&nbsp;<?php  echo $_SESSION["Username"]?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="logout.php"><i class="bi bi-power"></i> ออกจากระบบ</a></li>
                        </ul>
                    </div>
              </li>
          </div>
        </a>   
      </div>
      <?php 
        }
      ?>
  </header>