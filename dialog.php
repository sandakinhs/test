<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Dialog - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  
  #dialog .ui-dialog-titlebar
{
    display:none;
}
  </style>
  <script>
  $(function() {
    $( "#dialog" ).dialog({
      width: 400,
      height: 400,
      position: { my: 'right-230 center'},
      // modal: true,
      resizable: false,
      closeOnEscape: false,
      
    });


    $( "#dialog1" ).dialog({
      width: 400,
      height: 400,
      position: { my: 'center' },
      // modal: true,
      resizable: false,
      closeOnEscape: false,
    });
  });
  </script>
</head>
<body>
 
<div id="dialog" title="Basic dialog">
 <img src="day.png" align="right">
</div>

<div id="dialog1" >
  <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
 
 
</body>
</html>