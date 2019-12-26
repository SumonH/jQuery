<?php include 'inc/header.php'; ?>

<?php
 function bg(){
   echo "bg";
 }
 function text(){
   echo "text";
 }

 ?>

<script>

$(document).ready(function(){

  $("#style").click(function(){
  $("p").removeClass(" <?php bg(); ?> ");
});


});

</script>


<button id="style">Remove style</button>

<div class="para">

    <!-- <div class="inside"></div> -->
    <p class="text bg">I am learning jQuery</p>

</div>














<?php include'inc/footer.php'; ?>
