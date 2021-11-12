<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="BG.css">
    <link rel="stylesheet" href="Animation.css">
    <link rel="stylesheet" href="fotter.css">
    <link rel="stylesheet" href="Divandcard.css">
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
<?php include 'navbar.php';?>
<button style="  border-radius: 70% " onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up"></i></button>
<div id="stars"></div>
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
  
<div class="footer-basic">
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


<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop >= 20 || document.documentElement.scrollTop >= 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
