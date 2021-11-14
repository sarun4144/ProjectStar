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
<div class="ms-3 me-3 sticky-top">
<?php 
    session_start();
    include 'navbar-login.php';?>
    <br>
<div id="sidebar" class="sider" style="margin-left: -5px;">
    <h3>CATEGORIES</h3>
    <div class="checklist categories">
      	<ul>
			<li><a href=""><span></span><img src="https://cdn-icons-png.flaticon.com/512/2845/2845328.png" width="15px" height="">&nbsp;Armor</a></li>
        	<li><a href=""><span></span><img src="https://cdn-icons.flaticon.com/png/512/3430/3430797.png" width="15px" height="">&nbsp;Weapon</a></li>
            <li><a href=""><span></span><img src="https://cdn-icons-png.flaticon.com/512/703/703623.png" width="15px" height="">&nbsp;Vehicle</a></li>
            <li><a href=""><span></span><img src="https://cdn-icons.flaticon.com/png/512/1289/1289506.png" width="15px" height="">&nbsp;Accensories</a></li>
            <li><a href=""><span></span><img src="https://cdn-icons.flaticon.com/png/512/2579/2579397.png" width="15px" height="">&nbsp;Consumable</a></li>
            <li><a href=""><span></span><img src="https://cdn-icons-png.flaticon.com/512/1021/1021357.png" width="15px" height="">&nbsp;Crafting Materials</a></li>
        </ul>
    </div>
    <h3>Rarelity</h3>
    <div class="checklist categories">
      	<ul>
			<li><a href=""><span></span><img src="" width="15px" height=""> Common</a></li>
        	<li><a href=""><span></span><img src="" width="15px" height=""> Rare</a></li>
            <li><a href=""><span></span><img src="" width="15px" height=""> Epic</a></li>
            <li><a href=""><span></span><img src="" width="15px" height=""> Legendary</a></li>
        </ul>
    </div>
    <h3>Status</h3>
    <div class="checklist categories">
      	<ul>
			<li><a onclick="showDiv('hidden-a')" style="cursor: pointer;" class=" text-white"><span></span>Attack</a></li>
            <div id="hidden-a" style="display: none;">
                <div class="filter level-filter level-req">
                    <div id="attack" class="range-slider">
                        <div class="number-group">
                            <input class="number-input" type="number" value="1" min="0" max="100"> to 
                            <input class="number-input" type="number" value="100" min="0" max="100">
                        </div>
                        <div class="range-group">
                            <input class="range-input" value="1" min="1" max="100" step="1" type="range">
                            <input class="range-input" value="100" min="1" max="100" step="1" type="range">
                        </div>
                    </div>
                </div>
                <script src="slider.js"></script>
            </div>
        	<li><a onclick="showDiv('hidden-d')" style="cursor: pointer;" class=" text-white"><span></span>Defence</a></li>
            <div id="hidden-d" style="display: none;">
                <div class="filter level-filter level-req">
                    <div id="defence" class="range-slider">
                        <div class="number-group">
                            <input class="number-input" type="number" value="1" min="0" max="100"> to 
                            <input class="number-input" type="number" value="100" min="0" max="100">
                        </div>
                        <div class="range-group">
                            <input class="range-input" value="1" min="1" max="100" step="1" type="range">
                            <input class="range-input" value="100" min="1" max="100" step="1" type="range">
                        </div>
                    </div>
                </div>
                <script src="slider.js"></script>
            </div>
            <li><a onclick="showDiv('hidden-v')" style="cursor: pointer;" class=" text-white"><span></span>Vitality</a></li>
            <div id="hidden-v" style="display: none;">
                <div class="filter level-filter level-req">
                    <div id="vitality" class="range-slider">
                        <div class="number-group">
                            <input class="number-input" type="number" value="1" min="0" max="100"> to 
                            <input class="number-input" type="number" value="100" min="0" max="100">
                        </div>
                        <div class="range-group">
                            <input class="range-input" value="1" min="1" max="100" step="1" type="range">
                            <input class="range-input" value="100" min="1" max="100" step="1" type="range">
                        </div>
                    </div>
                </div>
                <script src="slider.js"></script>
            </div>
            <li><a onclick="showDiv('hidden-c')" style="cursor: pointer;" class=" text-white"><span></span>Charisma</a></li>
            <div id="hidden-c" style="display: none;">
                <div class="filter level-filter level-req">
                    <div id="charisma" class="range-slider">
                        <div class="number-group">
                            <input class="number-input" type="number" value="1" min="0" max="100"> to 
                            <input class="number-input" type="number" value="100" min="0" max="100">
                        </div>
                        <div class="range-group">
                            <input class="range-input" value="1" min="1" max="100" step="1" type="range">
                            <input class="range-input" value="100" min="1" max="100" step="1" type="range">
                        </div>
                    </div>
                </div>
                <script src="slider.js"></script>
            </div>
            <li><a onclick="showDiv('hidden-ag')" style="cursor: pointer;" class=" text-white"><span></span>Agility</a></li>
            <div id="hidden-ag" style="display: none;">
                <div class="filter level-filter level-req">
                    <div id="agility" class="range-slider">
                        <div class="number-group">
                            <input class="number-input" type="number" value="1" min="0" max="100"> to 
                            <input class="number-input" type="number" value="100" min="0" max="100">
                        </div>
                        <div class="range-group">
                            <input class="range-input" value="1" min="1" max="100" step="1" type="range">
                            <input class="range-input" value="100" min="1" max="100" step="1" type="range">
                        </div>
                    </div>
                </div>
                <script src="slider.js"></script>
            </div>
            <li><a onclick="showDiv('hidden-t')" style="cursor: pointer;" class=" text-white"><span></span>Talent</a></li>
            <div id="hidden-t" style="display: none;">
                <div class="filter level-filter level-req">
                    <div id="talent" class="range-slider">
                        <div class="number-group">
                            <input class="number-input" type="number" value="1" min="0" max="100"> to 
                            <input class="number-input" type="number" value="100" min="0" max="100">
                        </div>
                        <div class="range-group">
                            <input class="range-input" value="1" min="1" max="100" step="1" type="range">
                            <input class="range-input" value="100" min="1" max="100" step="1" type="range">
                        </div>
                    </div>
                </div>
                <script src="slider.js"></script>
            </div>
        </ul>
    </div>
</div>
</div>
<div class="wrap container"> <!-- Layer1 -->
            <?php

                $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
                $sql="SELECT * FROM item ";
                $result =  $conn -> query($sql);

                while($row=$result->fetch()){
                    echo "<div class='box' style='background-color: #242736'>
                    <div class='border-bottom'>
                        <img src='Stone.png' alt='Item' style='width: 300px;'>
                    </div>
                    <div style='text-align: left; margin-left: 10px; margin-top: 10px;'>";
                    echo "Item ID: ".$row[0]."<br> Name: ".$row[1]."<div style='font-size: 12.5px;'>ATK - ".$row[2]."<br> DEF - ".$row[3]."<br> INT - ".$row[4]."<br> VIT - ".$row[5]."<br> CHA - ".$row[6]."<br> AGI - ".$row[7]."<br> TAL - ".$row[8]."</div>";
                    echo "</div>
                            </div>";
                    // if($row[13]==='0'){
                    //     $sql="UPDATE item SET User_Id = '$_SESSION[UserID]' WHERE Id_Item = '$item_id'";
                    //     $result=$conn->query($sql);
                    //     $_SESSION["ItemSync"] = 1;
                    //     header("location:Profile.php");
                    //     die();
                    // }
                    // else{
                    //     $_SESSION["ItemError"] = 1;
                    //     header("location:Profile.php");
                    //     die();
                    // }
                }
                $conn=null;

                ?>
            </div>
</body>
    <script>
        function showDiv(Div) {
            var x = document.getElementById(Div);
            if(x.style.display=="none") {
                x.style.display = "flex";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    