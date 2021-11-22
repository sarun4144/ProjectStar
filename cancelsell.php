<?php
    session_start();
    $item_id=$_GET['item_id'];
    $user=$_SESSION["UserID"];
    $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
    $sql="SELECT * FROM item WHERE Id_Item = '$item_id'";
    $result =  $conn -> query($sql);
    while($row=$result->fetch()){
        if($row[13]===$user){
            $sql="UPDATE item SET Hold_or_Sell = 'H' WHERE Id_Item = '$item_id'";
            $result=$conn->query($sql);
            $sql="INSERT INTO log (User_Id_Seller,Item_Id,State) VALUES ('$user','$item_id','Cancel')";
            $conn->exec($sql);
            $sql="DELETE FROM market where Item_Id = '$item_id'";
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