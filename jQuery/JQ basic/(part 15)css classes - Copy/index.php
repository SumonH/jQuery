<?php include 'inc/header.php'; ?>

<?php
  $bg = "background-color";//css property
  $bgvalue = "#FF0000";//css value

  $clr = "color";
  $clrvalue = "#fff";
  $pdd = "padding";
  $pddvalue = "30px";
  $wd = "width";
  $wdvalue = "200px";
 ?>

<script>

$(document).ready(function(){
  $("#style").click(function(){
  $("p").css({
  "<?php echo $bg; ?>": "<?php echo $bgvalue;?>",
  "<?php echo $clr; ?>" : "<?php echo $clrvalue; ?>",
  "<?php echo $wd; ?>" : "<?php echo $wdvalue; ?>",
  "<?php echo $pdd; ?>" : "<?php echo $pddvalue; ?>"
});
});
});

</script>


<button id="style">Add css</button>

<div class="para">

    <!-- <div class="inside"></div> -->
    <p>I am learning jQuery</p>

</div>














<?php include'inc/footer.php'; ?>
