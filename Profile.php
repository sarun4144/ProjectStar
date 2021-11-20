
<!DOCTYPE html>
<html lang="en">
<head>
<style>
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
    
    <?php
    session_start();
    include 'navbar.php';
    if(!isset($_SESSION["Username"])){
        header("location:login.php");
        die();
    }
    ?>
    
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
          <?php 
            if(isset($_SESSION["ItemCancel"])){
                echo "<script>alert('Canceled!');</script>";
                unset($_SESSION["ItemCancel"]);
            }
            if(isset($_SESSION["CancelError"])){
                echo "<script>alert('Can't Cancel');</script>";
                unset($_SESSION["CancelError"]);
            }
          ?>

      <div class="gradient-border mt-5 ">
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
                
        <div class="container">
                
            <div class="nav">

                <div class="h1 col-11">Item</div>

                <div class="text-end"><button class=" btn text-white fw-bold" style="background-color:#E95589"  data-bs-target="#sync" data-bs-toggle="modal">Sync item</button></div> 
                    <div class="modal fade" id="sync">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <h5 class="modal-title ">Sync Item</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                            <div class="modal-body">
                                <form method="POST" action="syncitem.php">
                                    <div class="form-group">
                                        <label>ID Item</label>
                                        <input type="text" name="item_id" class="form-control mt-2 required">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                    <button class="btn text-white fw-bold" type="submit" style="background-color:#E95589">Claim</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>  
        </div>
        
        <hr class="new1">
        <!-- item-->
        <div class="text-end">
            <button class=" btn btn-danger text-white fw-bold me-2 mt-2 mb-2" data-bs-target="#sell" data-bs-toggle="modal">Sell</button></div> 
                    <div class="modal fade" id="sell">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <h5 class="modal-title ">Sell Item</h5>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                            <div class="modal-body">
                                <form method="POST" action="sellitem.php">
                                    <div class="form-group">
                                        <label>ID Item</label>
                                        <input type="text" name="item_id" class="form-control mt-2 required">
                                        <label class="mt-3">Price (Gem)</label>
                                        <input type="text" name="price_gem" class="form-control mt-2 required">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                    <button class="btn btn-danger text-white fw-bold" type="submit" >Sell</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
        <div class="wrap"> <!-- Layer1 -->
                                
        
                    <?php
                        
                        $conn=new PDO("mysql:host=localhost;dbname=spaceutopia;charset=utf8","root","");
                        $sql="SELECT * FROM item WHERE User_Id = $_SESSION[UserID] ";
                        $result =  $conn -> query($sql);
                        
                        while($row=$result->fetch()){
                            $hos=$row[10];
                            echo "<div class='box' style='background-color: #242736'>
                            <div class='border-bottom'>
                                <img src='Stone.png' alt='Item' style='width: 300px;'>
                            </div>
                            <div style='text-align: left; margin-left: 10px; margin-top: 10px;'>";
                            echo "Item ID: ".$row[0]."<br> Name: ".$row[1]."<div class='mt-2' style='font-size: 12.5px;'>ATK - ".$row[2]."<br> DEF - ".$row[3]."<br> INT - ".$row[4]."<br> VIT - ".$row[5]."<br> CHA - ".$row[6]."<br> AGI - ".$row[7]."<br> TAL - ".$row[8]."</div>";
                            if($hos==='S'){
                                echo "<div class='text-end me-2'><button class='btn btn-danger text-white fw-bold mt-2' '  data-bs-target='#cancel' data-bs-toggle='modal'>Cancel</button></div>";?>
                            <div class="modal fade" id="cancel">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title ">Cancel Item Sell</h5>
                                            <button class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Are you sure to CANCEL selling this Item</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <?php
                                                echo "<a href='cancelsell.php?item_id=$row[0]'>
                                                <button class='btn btn-danger text-white fw-bold' type='submit'>Yes</button>
                                                </a>";
                                            ?>
                                            <button class="btn btn-secondary text-white fw-bold" type="submit" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                            }
                            echo "</div></div>";    
                        }
                        $conn=null;

                    ?>
                 <!-- ITEM 2 -->

            </div>

        <!-- item-->
        </div>
        
        
      </div>
  </div>
  
</body>
</html>