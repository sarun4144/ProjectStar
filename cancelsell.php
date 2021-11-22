<?php
    session_start();
    $item_id=$_GET['item_id'];
    $user=$_SESSION["UserID"];
    $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
    $sql="SELECT * FROM item WHERE Id_Item = '$item_id'";
    $result =  $conn -> query($sql);
    $sql1="SELECT * FROM item WHERE Id_Item = '$item_id'";
    $result1 =  $conn -> query($sql);
    echo $item_id;
    while($row=$result->fetch()){
        if($row[13]===$user){
            $sql1="UPDATE item SET Hold_or_Sell = 'H' WHERE Id_Item = '$item_id'";
            $result1=$conn->query($sql1);
            $sql="INSERT INTO log (Price,User_Id_Seller,Item_Id,State) VALUES ('$price_gem','$user','$item_id','Cancel')";
            $conn->exec($sql);
            $_SESSION["ItemCancel"] = 1;
            header("location:Profile.php");
            die();
        }
        else{
            $_SESSION["CancelError"] = 1;
            header("location:Profile.php");
            die();
        }
    }
    $conn=null;
?>