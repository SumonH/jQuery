<?php include 'inc/header.php'; ?>



<script>

$(document).ready(function(){

  $("#remove").click(function(){
  $(".para").remove();// "remove" all hide
});
  $("#empty").click(function(){
  $(".para").empty(); //"empty" just eliments hide body shown
});

});

</script>


<button id="remove">Remove</button>
<button id="empty">Empty</button>


<div class="para">

<div class="inside"></div>
<p style="float:right">I am learning jQuery</p>

</div>














<?php include'inc/footer.php'; ?>
