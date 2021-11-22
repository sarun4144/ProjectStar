<?php
// update owner HOS
// cut gem 1
// add gem 1
// insert log 1
// market delete 1

    session_start();
    if(!isset($_SESSION["Username"])){
        header("location:login.php");
        die();
    }
    $item_id=$_GET['item_id'];
    $user=$_SESSION["UserID"];
    $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
    $sql="SELECT t1.Id_Item,t1.Hold_or_Sell,t1.User_Id,t2.Price,t2.User_Id,t3.Gem
    FROM item AS t1 INNER JOIN market AS t2 ON (t1.User_Id=t2.User_Id) INNER JOIN user AS t3 ON (t1.User_ID=t3.ID) WHERE t1.Id_Item = $item_id ";
    $result =  $conn -> query($sql);

    $sql1="SELECT * FROM user ";
    $result1 =  $conn -> query($sql1);

    $sql2="SELECT * FROM user WHERE ID = $user";
    $result2 =  $conn -> query($sql2);
    $row2=$result2->fetch();
    $buyer_gem = $row2[5];

    $sql3="SELECT * FROM market WHERE Item_Id = $item_id ";
    $result3 =  $conn -> query($sql3);
    $row3=$result3->fetch();
    $price_gem = $row3[1];
    while($row=$result->fetch()){
        if($user!=$row[2] && $buyer_gem  >= $row[5]){
            $sql = "INSERT INTO log (Price,User_Id_Seller,Item_Id,User_Id_Buyer,State) VALUES ('$row[3]','$row[2]','$item_id','$user','Sold')";
            $conn->exec($sql);

            $sql = "DELETE FROM market Where Item_Id = '$item_id'";
            $conn->exec($sql);

            $sql = "UPDATE item SET Hold_or_Sell = 'H', User_Id = '$user' WHERE Id_Item = '$item_id'";
            $result=$conn->query($sql);

            $sql1 = "UPDATE user SET Gem = Gem - '$price_gem' WHERE ID = '$user'";
            $result1=$conn->query($sql1);

            $sql1 = "UPDATE user SET Gem = Gem + '$price_gem' WHERE ID = '$row[2]'";
            $result1=$conn->query($sql1);

            $_SESSION["ItemSold"] = 1;
            header("location:buyitem.php?item_id=".$item_id);
            die();
        }else if($buyer_gem  < $row[5]){
            $_SESSION["ItemSoldError"] = 1;
            header("location:buyitem.php?item_id=".$item_id);
            die();
        }
    }
    $conn=null;
?>