<?php
require_once "./myDB/myDBEnter.php";
require_once "./myDB/worker.php";

?> 
    <!DOCTYPE HTML>
<html> 
    <head>  
<title>Game Hub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Icon library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!-- myStylSheet -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/head.css">
    
</head>  
    <header>
<!---------------------------------------------------------------------------------------->
    <!--navbar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Tech Insight</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Support</a>
      </li>    
    </ul>
  </div>  
</nav> 

 <!---------------------------------------------------------------------------------------------------> 
   <div class='container-fluid'>
    <div id="particles-js">
    <?php
/*  
$ = DB::queryFirstField("SELECT COUNT(*) FROM accounts");
$username = DB::queryFirstRow("SELECT * FROM accounts WHERE username=%s", '')
*/
?>
    <h1> <?php /*echo $userName */?></h1>
            </div><!--End div id particles-js-->
    <script type="text/javascript" src="./js/particles.js"></script>
    <script src="./js/app.js"></script>
    </div><!--End of container-fluid-->
 
    
<!-------------------------------------------------------------------------------------------------->
    </header>

    