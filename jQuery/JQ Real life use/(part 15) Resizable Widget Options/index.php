<?php include 'inc/header.php'; ?>

<div class="para">
<style>
.boxone{
  height: 100px; width: 100px; text-align: center;padding: 10px;color: #fff;
}


</style>


<script>

  $(document).ready(function(){
    $("#boxone").resizable({ //will be resiz
    alsoResize: "#boxtwo" //when previous box will be resiz same time next box auto will be resiz
  });
  });

</script>

<div class="boxone" id="boxone" style="background:#999">
  widget one
</div>
<br>
<div class="boxone" id="boxtwo" style="background:#444">
  widget two
</div>




</div>

<?php include'inc/footer.php'; ?>
