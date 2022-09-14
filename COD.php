<?php
include 'nav.php';

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
unset($_SESSION["cart"]);
// $username=$_SESSION['login_user2'];
?>


  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  




        <div class="container">
          <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
          </div>
        </div>
        <br>

<h2 class="text-center"> Thank you for Ordering at Drive By Resturant'! The ordering process is now complete.</h2>

<?php 
  $sql="SELECT ID FROM  TBL_ORDER WHERE customer_name='$username' ORDER BY ID DESC ";
  $res=mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res, MYSQLI_BOTH);
  $number=$row['ID'];
  
?>

<h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3>

        </body>

</html>