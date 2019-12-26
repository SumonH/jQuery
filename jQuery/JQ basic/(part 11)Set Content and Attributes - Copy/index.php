<?php include 'inc/header.php'; ?>


<script>

$(document).ready(function(){

  $("#show").click(function(){
    //alert($("#live").attr("href"));
    $("#live").attr({
      "href":"http://www.idbscholarsforum.com/",
      "title" :"IDB Scholars Forum"
    });
});
});

</script>


<button id="show">Change Value</button>

<div class="para">
  <p><a href="https://www.facebook.com" title="Training with live project" id="live">Training with live project</a></p>
</div>














<?php include'inc/footer.php'; ?>
