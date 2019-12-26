<?php include 'inc/header.php'; ?>

<div class="para">
<style>
.innerdivision{
  height: 200px; width: 200px; background: green; color: #fff;display: table-cell;vertical-align: middle;text-align: center;
}
.outerdiv{
  width: 350px; height: 350px; border: 2px solid #666;
}
</style>

<script>

  $(document).ready(function(){
    $("#draggableWidget").draggable({
      //cursor: 'pointer'
      //opacity: .5
      revert:true
      // 'pointer', 'move',
    });
  });

</script>

<div id="outeroption" class="outerdiv">

  <div id="draggableWidget" class="innerdivision">
    Test Draggable Widget.
  </div>

</div>











</div>

<?php include'inc/footer.php'; ?>
