<?php include 'inc/header.php'; ?>

<div class="para">
<style>
.boxone{
  height: 100px; width: 150px; text-align: center;padding: 10px;color: #fff;
}
.ui-resizable-helper{
  border: 3px dotted #444;
}
.outeroption{
  border: 2px solid #444; width: 500px; height: 300px; padding: 5px;
}

</style>


<script>

  $(document).ready(function (){
    $("#boxone").resizable({


      start: function(event, ui){
        $("#startDim").html(liveDim(event, ui));
      },
      resize: function(event, ui){
        $("#resizingDim").html(liveDim(event, ui));
      },
      stop: function(event, ui){
        $("#stopDim").html(liveDim(event, ui));
      }

  });

        function liveDim(event, ui){
          var ele = "Height: "+ui.size.height+"<br/>";
              ele += "Width: "+ui.size.width;
              return ele;
        }
  });

</script>

<table border="1" style="border-collapse:collapse;" cellpadding="5px">
  <tr>
    <td>Start:</td>
    <td><div id="startDim"></div></td>
  </tr>
  <tr>
    <td>Resizing:</td>
    <td><div id="resizingDim"></div></td>
  </tr>
  <tr>
    <td>stop</td>
    <td><div id="stopDim"></div></td>
  </tr>
</table>
<br>

<div class="boxone" id="boxone"style="background:#666">
  widget one
</div>





</div>

<?php include'inc/footer.php'; ?>
