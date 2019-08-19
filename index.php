<?php
require_once "./layout/header.php"; 
// require_once "./css/index.css"; //
?> 

<style>
    .col-sm-4 {
    border: 1px solid;
    padding: 10px;
    }
    
</style>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-4"> <center><button id="PC">PC</button></center> <p>Current Project</p></div>
        <div class="col-sm-4"> <center><button id="Xbox">Xbox</button></center><p>Current Project</p> </div>
        <div class="col-sm-4"> <center><button id="Ps4">Ps4</button></center><p>Current Project</p></div>
    </div>
    
<div class="pc"> </div>
<div class="Xbox"></div>
<div class="Ps4"> </div>     
</div>


<!-------------------------------------------------
<div class="container text-center">    
  <h3>What We Do</h3>
    <br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>------------------------------------------------->

<!-- body and html tag end in footer.php -->
<?php
    require_once "./layout/footer.php";
?>