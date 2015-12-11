
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<?php

 if ( isset( $_POST['name'] ) && !empty($_POST['name']) && isset( $_POST['creature_type'] ) ) {
       $full_name = $_POST['name'];
     $creature = $_POST['creature_type'];
       $full_name = strip_tags($full_name);
       $full_name = htmlspecialchars($full_name);
       $full_name = strtolower($full_name);
       $full_name = ucwords($full_name);   
?>

<body>
   <div id="content"> 
    <p>Thanks <?php echo $full_name; ?></p> 
    <?php
echo 'Today is '. date("l F jS Y"); 
    ?> <p> and it's been a busy day. But don't worry! Our wizards and witches are using their best potions and spells to provide you with the scariest creature in all of the land. </p>
<p>When you are ready to see the results <button id="dropdown" type="submit"> click here. </button></p>




<br>
<div id="description"> <!--validator does not think this should be here, because it does not see the php-->
  
   <?php
$robotDesc = array('Piercing laser eyes that will destroy anything in its sight!','Programmed to destruct anything that smiles, laughs or expresses the tiniest amount of joy.,','The day a challenging monster rises to the challenge, this robot just updates itself to be better.','This bot knows best. Really, it has downloaded every piece of information ever into its computer brain.');

$alienDesc = array('Men are from Mars, women are from venus, this alien is from a planet youve never even heard of.','There are no real UFO sightings, because whoever has seen this guy has not lived to tell the tale.','This alien does not know what else to write, because it speaks an alien language.','This alien smells funny.');

if ($_POST['creature_type'] == "alien"){
    echo $full_name . "zilla<br>";
    echo $alienDesc[mt_rand(0,3)];
    echo '<img src="images/alien.png" alt="alien" width="158" height="228">';
} else {
    echo $full_name . "-bot<br>";
  echo $robotDesc[mt_rand(0,3)];
    echo '<img src="images/robot.png" alt="robot" width="158" height="228">';

}
?> 
    
</div>




	</div>
    </div><!--content-->
   <?php     
    
 } else {
    $full_name = $_POST['name'];
//    $full_name = "Please enter your name</font>";
     echo "<font color='red'><p>Please fill in all required fields.</p></font>";
 
 }
?>

   <form method="post" action="step_one.php">
<button id="backbutton" type="submit">Go Back</button>
    </form>  
    
    
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>  
  
 <script>
    
$(document).ready(function () {
    
        $('#description').hide();
    
        $('#dropdown').click(function(i){
            i.preventDefault(); 
        $('#description').slideDown(1000);
        });
});
    </script>
    
</body>
</html>


