<!--Call php elements--> 
<?php
require_once "./layout/header.php";  
?> 
<!--Call styleSheet-->
  <link href="/css/index.css">
<!--Script/page functions-->
  <script> 
      $(document).ready(function(){ 
        $("button").click(function(){ 
          $("#contentArea").load("Ps4.php"); 
            }); 
              }); 
                </script> 
<!--------------------------------------------------------------------------------------------------->
 <body> 
<!----------------------------------------------------------------------------------------------->
<!--Choose a Game Platform to display exclusive games-->
<div class="container" id="console">
<div class="row"> 
   <?php 
      $result = DB::query("SELECT * FROM console");
       foreach ($result as $row) { 
    ?>
<div class="col-sm-4">
<div class="card" onclick="myfunction">
 
<div class="container">
  
  <h2><?php echo $row['title']; ?></h2>
   <h5><?php echo $row['description']; ?></h5>
  
</div><!--End container-->
</div><!--EndConsole-->
  </div><!--End col-sm-4-->
  <?php 
                    }   
                  ?>   
  </div><!--Row-->
</div><!--End container id console-->
<!------------------------------------Content Area---------------------------------------------------> 
<div id="contentArea">
  <div class="row" style="padding-bottom: 500px;">
    <?php 
      $result = DB::query("SELECT * FROM games WHERE device=",'');
       foreach ($result as $row) { 
    ?>
    <div class="col-sm-4">
      <div class="card">
        <div class="container">
          <h2><?php echo $row['title']; ?></h2>
          <h5>Description:</h5>
           <h5><?php echo $row['description']; ?></h5>
         <h5> stock:<?php echo $row['stock']; ?></h5>         
           <h5> Price:<?php echo $row['price']; ?></h5>         
          <h5>Platform:<?php echo $row['device']; ?></h5>
            </div><!-- container end -->
              </div><!-- card end -->
                </div><!-- col-sm-4 --> 
                  <?php 
                    }   
                  ?>   
                    </div><!--End of class row-->
                      </div><!--End div id contentArea--> 
                  
<!----------------------------------------------------------------------------------------------->
</body>  
<?php
require_once "./layout/header.php"; 
?>