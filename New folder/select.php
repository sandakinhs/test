<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="doc/smoothness-1.8.13/jquery-ui-1.8.13.custom.css">
    <link rel="stylesheet" type="text/css" href="src/ui.dropdownchecklist.themeroller.css">
    <script type="text/javascript" src="doc/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="doc/jquery-ui-1.8.13.custom.min.js"></script>
    <script type="text/javascript" src="doc/ui.dropdownchecklist-1.4-min.js"></script>

	<script type="text/javascript">
		 $(document).ready(function() {
           
             $("#s1").dropdownchecklist( { emptyText: "Tax", width: 100 } );
        
           

            });
	</script>
</head>
<body>

<?php
var_dump($_POST); 
?>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>" >
 <select id="s1" multiple="multiple" name="tax[]">
	            <option>Low</option>
	            <option>Medium</option>
	            <option>High</option>
</select>
 <input type="submit" >	        
</form>
</body>
</html>