<?php include 'inc/header.php'; ?>

<style media="screen">

</style>

<div class="para">


<script>

  $(document).ready(function (){
    $("#myspinner").spinner({
      step: 5,
      min: -1000,
      max: 20000
    });
  });


</script>


<div class="main">
  <input type="text" id="myspinner" value="0">
</div>






</div>

<?php include'inc/footer.php'; ?>
