<? php
     require_once="./myDBEnter.php"
    
    DB::insert('P', array(
  'Title' => $Title,
  'Date' => $Date,
  'Author' => $Author,
  'Text' => $Text,
  'Stars' => $Stars
));
    DB::("SELECT * FROM login WHERE username=%s AND password=%s", $username, $password);
    ?>


                                            <!---   Worker Bee has died.  


                                                            RIP BEE. -->