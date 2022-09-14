<?php

include 'nav.php';
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    

    


 <?php
$gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
    
    $username = $_SESSION["login_user2"];
    $order_date = date('Y-m-d h:m:sa');
    $gtotal = $gtotal + $total;
    $status = 'Pending';
 

    $sql= "SELECT *FROM TBL_CUSTOMER WHERE USERNAME='$username'";
    $res =$conn -> query($sql);
    if($count=mysqli_num_rows($res)>0){
        while($row = mysqli_fetch_assoc($res)){
            $contact = $row['contact'];
            $address = $row['address'];
            $email = $row['email'];
    
        }
        
    }
    $query = "INSERT INTO TBL_ORDER (food,price,quantity,total,order_date,status,customer_name,customer_contact,customer_email,customer_address)  VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt -> bind_param("ssssssssss",$foodname,$price,$quantity,$total,$order_date,$status,$username,$contact,$email,$address);
    $success = $stmt -> execute();      


            //   $success = $conn->query($query);  
         

      if(!$success)
      {
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }
      
  }

        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Choose your payment option</h1>
          </div>
        </div>
        <br>
<h1 class="text-center">Grand Total: KES<?php echo "$gtotal"; ?>/-</h1>
<h5 class="text-center">including all service charges. (no delivery charges applied)</h5>
<br>
<h1 class="text-center">
  <a href="cart.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>

  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
</h1>
        
  

<br><br><br><br><br><br>
<script src="js/script.js"></script>
        </body>
</html>