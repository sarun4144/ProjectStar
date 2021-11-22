<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="BG.css">
    <link rel="stylesheet" href="Animation.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="Scrolldown.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <title>SpaceUtopiaMarket</title>
    <link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/s261x260/245799487_267531408630886_2729645764553798750_n.png?_nc_cat=111&ccb=1-5&_nc_sid=aee45a&_nc_ohc=SdR8eRCLh24AX8iffW2&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=5bcf13950dee4473d137c76a46870f42&oe=61911213">
    <style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-image: linear-gradient(to bottom, #000428 30%, #293442 100%);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
#myBtn:hover {
  background-image: linear-gradient(to bottom, #614385 30%, #516395  100%)
}


</style>
</head>
<body>
<div class="ms-4 me-4"> 
  <?php include 'navbar.php';?>
</div>
<button style="border-radius: 70%; opacity: 0.7;" onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up"></i></button>
<div id="stars2"></div>
<div id="stars3"></div>
<div class="center">
<div class="lines"></div>
<h1>
  <span>SpaceUtopia</span>
  <span>SpaceUtopia</span>
</h1>
<h2 >Marketplace</h2>
</div>
<div style="margin-top: 45em; margin-left: 60em;" id="Scroll" >
  <div class="chevron"></div>
  <div class="chevron"></div>
  <div class="chevron"></div>
  <span class="text">Scroll down</span>
</div>
<div class="card" style="opacity: 0.8;background-color: #1C202C; width: 100%;height:30em; margin-top: 15em;"id="myP">
  <div class="card-body"> 
    <div class="col-lg-11">
      <span class="text2" style="margin-left: 10em; margin-top: 1.5em;">His palms are sweaty,knees weak,
        <span  class="text2" style=" margin-top:1.2em;">There's vomit on his sweater already,</span>
        <span  class="text2" style=" margin-top:1.2em;">Mom's spaghetti </span>
        <span  class="text2" style=" margin-top:1.2em;">Marshall Mathers....</span>
      </span>
    </div>
  <div class="col-lg-1"> 
    <div class="Ani1" ><img src="Cult.png" width="450px" id="myP"> </div>
  </div> 
</div>
  </div>

  <div class="card" style="opacity: 0.8;background-color: #222736; width: 100%;height:30em;"id="myP2">
    <div class="card-body"> 
      <div class="col-lg-0">  
        <div class="Ani2"><img src="jedi.png" width="450px" id="myP2"></div>
      </div>
      <div class="col-lg-12">
        <span class="text2" style="margin-left: 50em; margin-top: -2.5em;">Long time ago in galaxy far far 
          <span  class="text2" style=" margin-top:1.2em;">away...We are wep dev kakkak</span>
          <span  class="text3" style=" margin-top:1.2em;">Sarun Pungkrasae</span>
          <span  class="text3" style=" margin-top:1.2em;">Therapong Boonthol</span>
          <span  class="text3" style=" margin-top:1.2em;">Thanatron Therjuntuek</span>
          <span  class="text3" style=" margin-top:1.2em;">Panusak Chophee</span>
          <span  class="text2" style=" margin-top:1.2em;">They are Crime</span>
        </span>  
      </div>
    </div>
  </div>
  <div class="card" style="width: 100%;height:30em;"id="myP3">
  <div class="card-body">
    <div class="Ani4"><img src="Credit.png" width="350px" id="myP4" "> </div>
    <div class="Ani5"><img src="Iron.png" width="350px" id="myP5" "></div>
     <div class="Ani3"><img src="Stone.png" width="800px" id="myP3" "> </div>  
    </div>
  </div>

  <div class="footer-basic" style="margin-top: 50em;">
      <footer>
          <div class="social"><a href="https://www.instagram.com/p/BrajjGLHcoR/" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="https://twitter.com/FortniteGame" target="_blank"><i class="bi bi-twitter"></i></a>
          <a href="https://www.facebook.com/photo/?fbid=2846872718675881&set=pob.100002255540078" target="_blank"><i class="bi bi-facebook"></i></a>
          </div>
          <ul class="list-inline">
              <li class="list-inline-item"><a href="Star.php">Home</a></li>
              <li class="list-inline-item"><a href="#">About</a></li>
              <li class="list-inline-item"><a href="#">Terms</a></li>
          </ul>
          <p class="copyright">Space Utopia © 2021</p>
      </footer>
  </div>
</div>
</body>
</html>
<script>
var button = document.getElementById("myBtn");
var Scroll = document.getElementById("Scroll");
window.onscroll = function() {
  scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 25|| document.documentElement.scrollTop >25) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
    // --------------------------------------------------------------//
  if (document.body.scrollTop > 25|| document.documentElement.scrollTop >25) {
    Scroll.style.visibility = "hidden";
  } else {
    Scroll.style.visibility = "visible";
  }

  if (document.body.scrollTop > 26 || document.documentElement.scrollTop > 26) {
    document.getElementById("myP").className = "showup";
  } else {
    document.getElementById("myP").className = "";
  }
  if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {
    document.getElementById("myP2").className = "showup2";
  } else {
    document.getElementById("myP2").className = "";
  }
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    document.getElementById("myP3").className = "showup3";
  } else {
    document.getElementById("myP3").className = "";
  }
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    document.getElementById("myP4").className = "showup4";
  } else {
    document.getElementById("myP4").className = "";
  }
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    document.getElementById("myP5").className = "showup5";
  } else {
    document.getElementById("myP5").className = "";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>


