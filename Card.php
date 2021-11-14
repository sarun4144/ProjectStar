<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
.gradient-border {
	 --border-width: 3px;
	 position: relative;
	 justify-content: center;
	 align-items: center;
	 font-family: Lato, sans-serif;
	 color: white;
	 background: #222;
	 border-radius: var(--border-width);
}
 .gradient-border::after {
	 position: absolute;
	 content: "";
	 top: calc(-1 * var(--border-width));
	 left: calc(-1 * var(--border-width));
	 z-index: -1;
	 width: calc(100% + var(--border-width) * 2);
	 height: calc(100% + var(--border-width) * 2);
	 background: linear-gradient(60deg, #5f86f2, #a65ff2, #f25fd0, #f25f61);
	 background-size: 300% 300%;
	 background-position: 0 50%;
	 border-radius: calc(2 * var(--border-width));
	 animation: moveGradient 4s alternate infinite;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
</head>
    <body>
        <link rel="stylesheet" href="Card1.css">
        <div class="conatiner">

            <span class="dropdown"> <!-- เรียงแบบไหน -->
                <button class="btn btn-light dropdown-toggle btn-sm" type="button" 
                 id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Lowest Number</button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="LowestN">Lowest Number</a></li>
                    <li><a class="dropdown-item" href="HighestN">Highest Number</a></li>
                    <li><a class="dropdown-item" href="LowestP">Lowest Price</a></li>
                    <li><a class="dropdown-item" href="HighestP">Highest Price</a></li>
                </ul>
                </span>

                <span class="dropdown"> <!-- เอาแบบไหนบ้าง -->
                    <button class="btn btn-light dropdown-toggle btn-sm" type="button" 
                     id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">All</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">All</a></li>
                        <li><a class="dropdown-item" href="#">For sell</a></li>
                        <li><a class="dropdown-item" href="#"> Not For sell</a></li>
                    </ul>
                    </span>

        <div class="gradient-border mt-5 ">
            <div class="wrap"> <!-- Layer1 -->
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
            </div>
        </div>
    </body>
</html> 