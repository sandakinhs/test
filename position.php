<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>position demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <style>
  #targetElement {
    height: 200px;
    margin: 50px;
    background: #9cf;
  }
  .positionDiv {
    position: absolute;
    width: 75px;
    height: 75px;
    background: #080;
  }
  </style>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
 
<div id="targetElement">
  <div class="positionDiv" id="position1"></div>
  <div class="positionDiv" id="position2"></div>
  <div class="positionDiv" id="position3"></div>
  <div class="positionDiv" id="position4"></div>
</div>
 
<script>
$( "#position1" ).position({
  my: "center",
  at: "center",
  of: "#targetElement"
});
 
$( "#position2" ).position({
  my: "left top",
  at: "left top",
  of: "#targetElement"
});
 
$( "#position3" ).position({
  my: "right center",
  at: "right bottom",
  of: "#targetElement"
});
 
// $( document ).mousemove(function( event ) {
//   $( "#position4" ).position({
//     my: "left+3 bottom-3",
//     of: event,
//     collision: "fit"
//   });
// });
</script>
 
</body>
</html>