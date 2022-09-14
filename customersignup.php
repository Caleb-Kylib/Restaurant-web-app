<?php
include 'nav.php';
?>
    <style>
         .edit{
  text-shadow: 2px 2px 5px lightgreen;
  color: green;
  }
  .click{
    width:50%;
    margin: auto;
  }
  .jumbotron{
    background-color:#f2f2f2;
    text-align: center;
    width: 80%;
    margin: auto;
    padding: 30px;
}
  input[type=text], select,input[type=email],input[type=password],input[type=file],input[type=number],textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  } 
    </style>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    
  
 

   

    <div class="container">
    <div class="jumbotron">
     <h1>Hi Guest, <br> Welcome to <span class="edit"> Caleb's restaurant' </span></h1>
     <br>
   <p>Get started by creating your account</p>
    </div>
    </div>



    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
      <div class="panel panel-primary">
        <div class="panel-heading"style="text-align:center;"> Create Account </div>
        <div class="panel-body">
          
        <form role="form" action="customer_registered_success.php" method="POST">
         
          <div class="row">
          <div class="form-group col-xs-12">
            <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
            <div class="input-group">
              <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
              <span class="input-group-btn">
                <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label> -->
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">
              <span class="input-group-btn">
                <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label> -->
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
            <div class="input-group">
              <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
              <span class="input-group-btn">
                <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label> -->
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span> Contact: </label>
            <div class="input-group">
              <input class="form-control" id="contact" type="number" name="contact" placeholder="Contact" required="">
              <span class="input-group-btn">
                <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></label> -->
            </span>
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
            <div class="input-group">
              <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
              <span class="input-group-btn">
                <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label> -->
            </span>
              </span>
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
              <span class="input-group-btn">
                <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label> -->
            </span>
              
            </div>           
          </div>
        </div>

        

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" type="submit">Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a style="color:blue;" href="customerlogin.php">Have an account? Login.</a></label>

        </form>

        </div>
        
      </div>
      
    </div>
    </div>

       <script src="js/script.js"></script>
    </body>
</html>