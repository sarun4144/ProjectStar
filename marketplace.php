<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<title>Marketplace</title>
<link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/s261x260/245799487_267531408630886_2729645764553798750_n.png?_nc_cat=111&ccb=1-5&_nc_sid=aee45a&_nc_ohc=SdR8eRCLh24AX8iffW2&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=5bcf13950dee4473d137c76a46870f42&oe=61911213">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="categories.css">
<link rel="stylesheet" href="Card1.css">
<body style="background-color: #222;">

<?php
    if(isset($_GET['name'])){
        if($_GET['name']=='All'){
            $name = "All";
        }else if($_GET['name']=='Notsell'){
            $name = "Not For Sale";
        }else if($_GET['name']=='Forsell'){
            $name = "For Sale";
        }
    }else{
        $name = "For Sale";
    }
?><div class="">
    <button style="border-radius: 70%; opacity: 0.7;" onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up"></i></button>
</div>

<div class="ms-3 me-3 sticky-top">
<?php 
    session_start();
    include 'navbar-login.php';?>
    <br>
<div id="sidebar" class="sider" style="margin-left: -5px;">
    <h3>CATEGORIES</h3>
    <div class="checklist categories">
      	<ul>
			<li><label for="Armor" style="color: #fff; cursor:pointer;"><input type="checkbox" id="Armor" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Armor</label></li>
        	<li><label for="Weapon" style="color: #fff; cursor:pointer;"><input type="checkbox" id="Weapon" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Weapon</label></li>
            <li><label for="Vehicle" style="color: #fff; cursor:pointer;"><input type="checkbox" id="Vehicle" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Vehicle</label></li>
            <li><label for="Accensories" style="color: #fff; cursor:pointer;"><input type="checkbox" id="Accensories" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Accensories</label></li>
            <li><label for="Consumable" style="color: #fff; cursor:pointer;"><input type="checkbox" id="Consumable" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Consumable</label></li>
            <li><label for="Crafting Materials" style="color: #fff; cursor:pointer;"><input type="checkbox" id="Crafting Materials" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Crafting Materials</label></li>
        </ul>
    </div>
    <h3>Rarelity</h3>
    <div class="checklist categories">
      	<ul>
			<li><label for="Common" style="color: #fff; cursor:pointer;"><input type="checkbox" id="Common" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Common</label></li>
        	<li><label for="Rare" style="color: #fff; cursor:pointer;"><input type="checkbox" id="Rare" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Rare</label></li>
            <li><label for="Epic" style="color: #fff; cursor:pointer;"><input type="checkbox" id="Epic" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Epic</label></li>
            <li><label for="Legendary" style="color: #fff; cursor:pointer;"><input type="checkbox" id="Legendary" style="margin-left: -20px; margin-right: 8px;"><img src="" width="15px" height="">&nbsp;Legendary</label></li>
        </ul>
    </div>
</div>

<div class="dropdown">
                <button type="button" class="btn text-white fw-bold dropdown-toggle ms-3" style="background-color:#E95589" 
                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $name ?></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="marketplace.php?name=All">All</a></li>
                        <li><a class="dropdown-item" href="marketplace.php">For Sale</a></li>
                        <li><a class="dropdown-item" href="marketplace.php?name=Notsell">Not For Sale</a></li>
                  </ul>
</div>
</div>  
                        <div class="wrap container">
                            <?php
                            $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
                            if(isset($_GET['name'])) {
                                if($_GET['name']=='Notsell'){
                                    $sql="SELECT * FROM item where Hold_or_Sell = 'H'";
                                }else if($_GET['name']=='All'){
                                    $sql="SELECT * FROM item";
                                }
                            }else{
                                $sql="SELECT * FROM item where Hold_or_Sell = 'S'";
                            }
                            $result =  $conn -> query($sql);
                            $sql1="SELECT * FROM market ";                 
                            $result1 =  $conn -> query($sql1);
                                while($row=$result->fetch()){
                                    $hos=$row[10];                     
                                    $item_id=$row[0];
                                    echo "<div class='box' style='background-color: #242736'>
                                            <div class='border-bottom'>
                                            <img src='Stone.png' alt='Item' style='width: 300px;'>
                                            </div>
                                            <div style='text-align: left; margin-left: 10px; margin-top: 10px;'>";
                                    echo "Item ID: ".$row[0]."<br> Name: ".$row[1]."<div style='font-size: 12.5px;'>ATK - ".$row[2]."<br> DEF - ".$row[3]."<br> INT - ".$row[4]."<br> VIT - ".$row[5]."<br> CHA - ".$row[6]."<br> AGI - ".$row[7]."<br> TAL - ".$row[8]."</div>";
                                    if($hos==='S'){
                                        $row=$result1->fetch();
                                            echo "<a href='buyitem.php?item_id=$item_id'>
                                                    <div class='text-end me-3'>
                                                        <button class='btn btn-success text-white fw-bold mt-2' '  data-bs-target='#cancel' data-bs-toggle='modal'>
                                                            Buy for $row[1] Gem
                                                        </button>
                                                    </div>
                                                </a>";
                                    }
                                    echo "</div>
                                          </div>";
                                    }
                                    $conn=null;
                            ?>
                        </div>          
</body>

    <script>
        var button = document.getElementById("myBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 25|| document.documentElement.scrollTop >25) {
                button.style.display = "block";
            } else {
                button.style.display = "none";
            }
        }
        function showDiv(Div) {
            var x = document.getElementById(Div);
            if(x.style.display=="none") {
                x.style.display = "flex";
            } else {
                x.style.display = "none";
            }
        }
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>