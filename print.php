<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
       popupWin.document.close();
            }
 </script>




<div id="divToPrint" style="display:none;">
  <div >
          <body>
            <a>This web page to print</a>
          </body>     
  </div>
</div>
<div>
  <input type="button" value="print" onclick="PrintDiv();" />
</div>