<?php include 'inc/header.php'; ?>

<div class="para">


<script>

  $(document).ready(function(){
    var getoutput = $("#state");
    var getslider = $("#slider");
    getslider.slider({
      range:true,
      min: 10,
      max:100,
      values: [20, 40],
      slide: function(event , ui){
        getoutput.html(ui.values[0]+'-'+ui.values[1]+' Taka');
        $("#minValue").val(ui.values[0]);
        $("#maxValue").val(ui.values[1]);
      }

    });
    getoutput.html(getslider.slider('values',0)+'-'+getslider.slider('values',1)+' Taka');

    $("#minValue").val(getslider.slider('values',0));
    $("#maxValue").val(getslider.slider('values',1));
  });

</script>



Amount: <span id="state"></span><br><br>
<div id="slider"></div><br>

<table>
  <tr>
    <td><label for="minValue">Minimum Amount</label></td>
    <td><input type="text" id="minValue" ></td>
  </tr>
  <tr>
    <td><label for="maxValue">Maximum Amount</label></td>
    <td>  <input type="text" id="maxValue" ></td>
  </tr>

</table>


















</div>

<?php include'inc/footer.php'; ?>
