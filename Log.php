<?php
    session_start();
  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Exo:wght@900&display=swap");
  img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.h1 {
  font-size: 40px;
}
hr.new1 {
  border: 1px solid #f25fd0;
}

.center {
  margin-left: auto;
  margin-right: auto;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
button{
    background: #a65ff2;
    color: whitesmoke;
    font-size: 12px;
    margin-top: 30px;
    font-weight: bold;
    padding: 8px 20px;
  }
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
@keyframes moveGradient {
	 50% {
		 background-position: 100% 50%;
	}
}

.headshot-2 {
	border-radius: 50%;
  margin-left: auto;
  margin-right: auto;
}

</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    
    <title>SpaceUtopiaMarket</title>
    <link rel="icon" href="https://scontent.xx.fbcdn.net/v/t1.15752-9/s261x260/245799487_267531408630886_2729645764553798750_n.png?_nc_cat=111&ccb=1-5&_nc_sid=aee45a&_nc_ohc=SdR8eRCLh24AX8iffW2&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=5bcf13950dee4473d137c76a46870f42&oe=61911213">
    <link rel="stylesheet" href="Card1.css">
  </head>
<body style="background-color: #222">

  <div class="container">
    <?php include 'navbar.php';?>
    
        <?php 
            if(isset($_SESSION["ItemSync"])){
                echo "<script>alert('Item Claim!');</script>";
                unset($_SESSION["ItemSync"]);
            }
            if(isset($_SESSION["ItemError"])){
                echo "<script>alert('Item already Claim!');</script>";
                unset($_SESSION["ItemError"]);
            }
          ?>
          <?php 
            if(isset($_SESSION["ItemSell"])){
                echo "<script>alert('Item Sell!');</script>";
                unset($_SESSION["ItemSell"]);
            }
            if(isset($_SESSION["SellError"])){
                echo "<script>alert('Can't sell not own Item!');</script>";
                unset($_SESSION["SellError"]);
            }
          ?>

      <div class="gradient-border mt-5 ">
      <?php 
  if(!isset($_SESSION["id"])){
?>
        <table class="center">  
          <tr>
            <td colspan="2">
              <div class="align-items-center"><img src="User-icon.png" alt="profile" class="headshot-2 wide-100px mt-3" ></div>
            </td>
          </tr>

        </table>
        <?php
  }else{
  ?>
  <table class="center">  
          <tr>
            <td colspan="2">
              <div class="align-items-center"><img src="User-icon.png" alt="profile" class="headshot-2 wide-100px mt-3" ></div>
            </td>
          </tr>

          <tr>
           <td colspan="2" style="text-align: center;">
              <div class="mt-3 h1">
                                <?php
                                    $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
                                    $sql="SELECT * FROM user WHERE Username='$_SESSION[Username]'";
                                    $result=$conn->query($sql);
                                    while($row=$result->fetch()){
                                        echo $row['Username'];
                                }
                                    $conn=null;
                                ?>
              </div>
            </td>
          </tr>
        </table>  
        <?php 
      }
    ?>
        <br>  
   <table class=" table table-striped"style="width:100%">
        <?php
            $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
            $sql="SELECT * FROM log ORDER BY Id_Log DESC"; 
            $result=$conn->query($sql);
        ?>
     <table width="100%" >
   <tr>
     <td Class='text4'>Id_Log</td>
     <td Class='text4'>Price</td>
     <td Class='text4'>Date</td>
     <td Class='text4'>Item_Id</td>
     <td Class='text4'>User_Id_Seller</td>
     <td Class='text4'>User_Id_Buyer</td>
     <td Class='text4'>State</td>
   </tr>
            <?php
            while($row=$result->fetch()){ 
              
              if($row['6']=='Sell'){
                 echo " <tr><td Class='text4' style='color: #e69a20' > [ ".$row['0']. " ]  </td> <td Class='text4' style='color: #e69a20' >" .$row['1']. " </td> <td Class='text4' style='color: #e69a20' >" .$row['2'].
            "</td> <td Class='text4' style='color: #e69a20' >".$row['3']."</td> <td Class='text4' style='color: #e69a20' > ".$row['4']."</td> <td Class='text4' style='color: #e69a20' > ".$row['5']."</td><td Class='text4' style='color: #e69a20' > ".$row['6']. "</td></tr>";
               }
              if($row['6']=='Cancel'){
                 echo " <tr ><td Class='text4 ' style='color:#e50000' > [ ".$row['0']. " ] </td> <td Class='text4' style='color: #e50000' > ".$row['1']. "</td> <td Class='text4' style='color:#e50000' > " .$row['2']. "</td> <td Class='text4' style='color:#e50000' > " .$row['3'].
            "</td> <td Class='text4' style='color:#e50000' >  ".$row['4']."</td> <td Class='text4' style='color:#e50000' >  ".$row['5']." </td> <td Class='text4' style='color:#e50000' > ".$row['6']."</td> </tr>";
               }
               if($row['6']=='Claim'){
                 echo " <tr ><td Class='text4 ' style='color:#82a6ed' > [ ".$row['0']. " ] </td> <td Class='text4' style='color:#82a6ed'> ".$row['1']. " </td> <td Class='text4' style='color:#82a6ed'>" .$row['2']. "</td> <td Class='text4' style='color:#82a6ed'> " .$row['3'].
            " </td> <td Class='text4' style='color:#82a6ed'>".$row['4']." </td> <td Class='text4' style='color:#82a6ed'>".$row['5']." </td> <td Class='text4' style='color:#82a6ed'>".$row['6']."</td> </tr>";
              }
               if($row['6']=='Sold'){
                 echo " <tr ><td Class='text4 ' style='color: #149e00' > [ ".$row['0']. " ] </td> <td Class='text4' style='color: #149e00'> ".$row['1']. "</td> <td Class='text4' style='color: #149e00'> " .$row['2']. "</td> <td Class='text4' style='color: #149e00'> " .$row['3'].
             "</td> <td Class='text4' style='color: #149e00'> ".$row['4']."</td> <td Class='text4' style='color: #149e00'> ".$row['5']." </td> <td Class='text4' style='color: #149e00'>".$row['6']."</td> </tr>";
               }
           
       } 
       $conn=null; 
      ?>
            </table>
            <hr>     
  <div style="color:#a9bfec"></div>
  </div>
</body>
</html>