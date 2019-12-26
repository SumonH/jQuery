<?php  include'inc/header.php'; ?>

<script>
$(document).ready(function(){
  $("#chain").click(function(){
    $(".para").css("background", "blue")
              .slideUp(3000)
              .slideDown(3000);
  });
});
</script>


<button id="chain">Click</button>

<div class="para">
  <div class="inside">


  </div>

</div>














<?php include'inc/footer.php'; ?>
