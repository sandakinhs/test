
<!-- input apostrophe to sql -->

<?php 
 $value = htmlspecialchars("Let's play", ENT_QUOTES);
// $value= "Let's play";
?>
<input type='text' value='<?php echo $value; ?>'/>
