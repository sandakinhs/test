<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" /> 
 
  
</head>
<body>

<div class="container">
  <!-- <h2>Activate Modal with JavaScript</h2> -->
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" id="myBtn">Open Modal</button> -->

  <!-- Modal -->
  <div  aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal" id="myModal">
    <div class="modal-dialog">
  <!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal hide fade" id="myModal"> -->
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<div id="aboutBox" class="boxLook boxBg drag">test</div>

<script>
$(document).ready(function(){
    
       

         $("#myModal").draggable();

          $("#myModal").modal({backdrop: false});
  
});

 $(function() {
        $( "#aboutBox" ).draggable();
    });

 
</script>

</body>
</html>
