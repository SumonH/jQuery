<?php include 'inc/header.php'; ?>
<?php
function inputname(){
  echo "Sumon Hasan";
}

  function department(){
    echo  "<b>Physics<b>";
  }
  function skill(){
    echo  "<b>PHP,Java<b>";
  }


 ?>

<script>

$(document).ready(function(){

  $("#name").click(function(){
    $("#getname").val("ami");

});
  $("#dep").click(function(){
    $("#line1").html("<?php department(); ?>");

});
  $("#skill").click(function(){
    $("#line2").text("<?php skill(); ?>");

});

});

</script>


<button id="name">Show name</button>
<button id="dep">Show department</button>
<button id="skill">Show skill</button>



<div class="para">
  <div>
    Name: <input type="text" id="getname" value="name will be here..">
  </div>


  <p id="line1"> <strong>Department</strong>.</p>
  <p id="line2">Skill</p>

</div>














<?php include'inc/footer.php'; ?>
