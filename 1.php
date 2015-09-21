<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"/>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<div>

<div   class="ui-widget-content">
<div class="modal fade" id="draggable">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 
</div>

<div   class="ui-widget-content">
<div class="modal fade" id="draggable2">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <p>One fine body 11&hellip;</p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 
</div>
</div>


<script>
        $('#draggable2').modal({ keyboard: false,
                           show: true,
                           backdrop: false
        });
        $('#draggable').modal({ keyboard: false,
                           show: true,
                           backdrop: false
        });
        // Jquery draggable
        // $('.modal-dialog').draggable({
        //     handle: ".modal-header"
        // });

		 $(function() {
    	 $( "#draggable" ).draggable({   handle: ".modal-header"  });
   		 $( "#draggable2" ).draggable({ handle: ".modal-body" });
  		});

     
//         $(".modal-dialog").dynamicDraggable({
//      handle: ".modal-header"  
// });
</script>  