<?php include 'inc/header.php'; ?>

<div class="para">
<script>
  $(document).ready(function(){
    $("#slider").slider({
      value: 100,
      min:0,
      max: 500,
      step:50,
      slide:function(event, ui){
        $("#amount").val("Tk. "+ui.value);
      }
    });
    $("#amount").val("Tk. " + $("#slider").slider("value"));
  });
</script>
<level for="amount">Select Price</level>
<input type="text" id="amount" readonly style="font-weight:bold; color:green; margin-bottom:20px">
<div id="slider">

</div>

<?php include'inc/footer.php'; ?>
