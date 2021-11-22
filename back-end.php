<?php
    $data = "";
    $Armor = $_POST["Armor"];
    $Weapon = $_POST["Weapon"];
    $Vehicle = $_POST["Vehicle"];
    $Accensories = $_POST["Accensories"];
    $Consumable = $_POST["Consumable"];
    $Craft = $_POST["Crafting_Materials"];
    $Common = $_POST["Common"];
    $Rare = $_POST["Rare"];
    $Epic = $_POST["Epic"];
    $Legendary = $_POST["Legendary"];
    $HoSe = $_POST["type"];
    $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
    if($HoSe == "all"){
        $sql="SELECT * FROM item AS t1 INNER JOIN catagory AS t2 ON(t1.Category_Id=t2.Id_Category) INNER JOIN rarity AS t3 ON(t1.Rarity_Id=t3.Rarity) WHERE (t1.Hold_or_Sell = 'S' OR t1.Hold_or_Sell = 'H')";
    }
    if($HoSe == "sell"){
        $sql="SELECT * FROM item AS t1 INNER JOIN catagory AS t2 ON(t1.Category_Id=t2.Id_Category) INNER JOIN rarity AS t3 ON(t1.Rarity_Id=t3.Rarity) WHERE t1.Hold_or_Sell = 'S'";
    }
    if($HoSe == "notsell"){
        $sql="SELECT * FROM item AS t1 INNER JOIN catagory AS t2 ON(t1.Category_Id=t2.Id_Category) INNER JOIN rarity AS t3 ON(t1.Rarity_Id=t3.Rarity) WHERE t1.Hold_or_Sell = 'H'";
    }              
    if($Armor != "" || $Weapon != "" || $Accensories != "" || $Consumable != "" ||$Craft != "" || $Vehicle != ""){
        $sql = $sql . "&&(" ;
        if($Armor != ""){
            $sql = $sql . "t2.Name = 'Armor'";
            if($Weapon != "" || $Accensories != "" || $Consumable != "" ||$Craft != "" || $Vehicle != ""){
                $sql = $sql . "||" ;
            }
        }
        if($Weapon != ""){
            $sql = $sql . "t2.Name = 'Weapon'";
            if($Accensories != "" || $Consumable != "" ||$Craft != "" || $Vehicle != ""){
                $sql = $sql . "||" ;
            }
        }
        if($Vehicle != ""){
            $sql = $sql . "t2.Name = 'Vehicle'";
            if(($Accensories != "") || ($Consumable != "") ||($Craft != "")){
                $sql = $sql . "||" ;
            }
        }
        if($Accensories != ""){
            $sql = $sql . "t2.Name = 'Accessories'";
            if($Consumable != "" ||$Craft != ""){
                $sql = $sql . "||" ;
            }
        }
        if($Consumable != ""){
            $sql = $sql . "t2.Name = 'Consumable'";
            if($Craft != ""){
                $sql = $sql . "||" ;
            }
        } 
        if($Craft != ""){
            $sql = $sql . "t2.Name = 'Crafting materials'";
        }
        $sql = $sql . ')';
    }
    if($Common != "" || $Rare != "" || $Epic != "" || $Legendary != ""){
        $sql = $sql . "&&(" ;
        if($Common != ""){
            $sql = $sql . "t3.Name = 'Common'";
            if($Rare != "" || $Epic != "" || $Legendary != ""){
                $sql = $sql . "||" ;
            }
        }
        if($Rare != ""){
            $sql = $sql . "t3.Name = 'Rare'";
            if($Epic != "" || $Legendary != ""){
                $sql = $sql . "||" ;
            }
        }
        if($Epic != ""){
            $sql = $sql . "t3.Name = 'Epic'";
            if($Legendary != ""){
                $sql = $sql . "||" ;
            }
        }
        if($Legendary != ""){
            $sql = $sql . "t3.Name = 'Legendary'";
        }
        $sql = $sql . ')';
    }
    $sql = $sql . 'ORDER BY t1.Id_Item';
    $result =  $conn -> query($sql);
        while($row=$result->fetch()){
            $hos=$row[10];                     
            $item_id=$row[0];
            $data = $data. "<div class='box' style='background-color: #242736'>
                    <div class='border-bottom'>
                    <img src='Stone.png' alt='Item' style='width: 300px;'>
                    </div>
                    <div style='text-align: left; margin-left: 10px; margin-top: 10px;'>";
                    $data = $data. "Item ID: ".$row[0]."<br> Name: ".$row[1]."<div style='font-size: 12.5px;'>ATK - ".$row[2]."<br> DEF - ".$row[3]."<br> INT - ".$row[4]."<br> VIT - ".$row[5]."<br> CHA - ".$row[6]."<br> AGI - ".$row[7]."<br> TAL - ".$row[8]."</div>";
            if($hos==='S'){
                $data = $data. "<a href='buyitem.php?item_id=$item_id'>
                            <div class='text-end me-3'>
                                <button class='btn btn-success text-white fw-bold mt-2' '  data-bs-target='#cancel' data-bs-toggle='modal'>
                                    Buy This Item
                                </button>
                            </div>
                        </a>";
            }
            $data = $data. "</div></div>";
            }
    $conn=null;
    echo json_encode( array(
        "code" => $data
    ));
?>