<?php
session_start();
    $item_id=$_POST['item_id'];
    $price_gem=$_POST['price_gem'];
    $user=$_SESSION["UserID"];
    $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
    $sql="SELECT * FROM item WHERE Id_Item = '$item_id'";
    $result =  $conn -> query($sql);
    while($row=$result->fetch()){
        if($row[13]===$user){
            $sql="UPDATE item SET Hold_or_Sell = 'S' WHERE Id_Item = '$item_id'";
            $result=$conn->query($sql);
            $sql="INSERT INTO market (Price,User_Id,Item_Id) VALUES ('$price_gem','$user','$item_id')";
            $conn->exec($sql);
            $sql="INSERT INTO log (Price,User_Id_Seller,Item_Id,State) VALUES ('$price_gem','$user','$item_id','Sell')";
            $conn->exec($sql);
            $_SESSION["ItemSell"] = 1;
            header("location:Profile.php");
            die();
        }
        else{
            $_SESSION["SellError"] = 1;
            header("location:Profile.php");
            die();
        }
    }
    $conn=null;
?>
