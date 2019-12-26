<?php include 'inc/header.php'; ?>


<script>

$(document).ready(function(){
  $("#select").click(function(){
    var val = "";
    val +="width is: "+$(".dimen").width()+"</br>";
    val +="Height is: "+$(".dimen").height()+"</br>";
    val +="Inner  width is: "+$(".dimen").innerWidth()+"<br>";
    val +="Inner Height is: "+$(".dimen").innerHeight()+"<br>";
    val +="Outer  width is: "+$(".dimen").outerWidth()+"<br>";
    val +="Outer Height is: "+$(".dimen").outerHeight()+"<br>";
    val +="overall  width is: "+$(".dimen").outerWidth(true)+"<br>";
    val +="overall Height is: "+$(".dimen").outerHeight(true);
    $("#state").html(val);

});
});

</script>


<button id="select">Display</button>
<div id="state"></div>
<div class="para">

    <p class="dimen">I am learning jQuery</p>

</div>














<?php include'inc/footer.php'; ?>
