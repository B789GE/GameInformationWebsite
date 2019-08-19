<?php
/*---------------------------------------------
require_once "./myDBEnter.php";
require_once "./css/head.css"
---------------------------------------------*/
?>
    <!DOCTYPE HTML>
<html> 
    <head> 
<title>Game Hub</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="./css/head.css">
<link rel="stylesheet" href="./css/index.css">
<link rel="stylesheet" href="./css/footer.css">
<!---------------------------------------------
    <style>
    .hidden
    {
    display: none !important;
    }
    </style> 
--------------------------------------------->
    <?php
/*
    if (array_key_exists("user", $_SESSION)) 
    {
    require_once("./layouts/accountOrNot/userHead.php");
    } 
    else 
    {
    require_once("./layouts/accountOrNot/guestHead.php");
    }
*/ ?> 

 
    <!-- NavBar--> 
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Game hub</a>
    <img class="logo" src="./img/icon/logo.jpg" width="50px" height= "50px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        
    <ul class="navbar-nav">
     <li class="nav-item"> <a class="nav-link" href="index.php">Home</a></li>
     <li class="nav-item"> <a class="nav-link" href="#">About Us</a></li> 
     <li class="nav-item"> <a class="nav-link" href="#">Shopping</a></li>
    </ul>
        
      <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
  </div>  
</nav>
   
        <div class="jumbotron">
        <h1>Product Information </h1>  
        </div> 
        
    </head>
    
    <body>
        
    <!--Body Continues on index.php and ends in footer.php-->