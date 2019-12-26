<?php  include'inc/header.php'; ?>

<script>
$(document).ready(function(){
$("#show").click(function(){
  alert("The Text is: "+$("#line2").text()); //when clicking then will be shown alert and with text shown "p" tag
});


$("#source").click(function(){
  alert("The Text is: "+$("#line").html());//when clicking then will be shown alert and with text shown "html" tag
});


$("#testval").click(function(){
  alert("The value is: "+$("#name").val()); //come value wehrn clicking thats value we input
});
});

</script>


<button id="show">Show text</button>
<button id="source">Show html</button>
<button id="testval">Show Value</button>



<div class="para">
  <div>
    Name: <input type="text" id="name" value="live project">
  </div>


  <p id="line">Training with live <strong>project</strong>.</p>
  <p id="line2">I am learning  <strong>jQuery</strong>.</p>

</div>














<?php include'inc/footer.php'; ?>
