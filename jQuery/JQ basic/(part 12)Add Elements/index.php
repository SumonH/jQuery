<?php include 'inc/header.php'; ?>

<!-- append() //it use a elliment end
prepend() // it use a elliment in front of
after() //
before() // -->
<?php

function app(){
  echo "Live Project.";
}
function pre(){
  echo "Live Project.";
}
function aft(){
  echo "Live Project.";
}
function bef(){
  echo "Live Project.";
}

 ?>

<script>

$(document).ready(function(){

  $("#app").click(function(){
    $("p").append("<?php app(); ?>")//"append"
});
  $("#pre").click(function(){
    $("p").prepend("<?php pre(); ?>")//"prepend"
});
  $("#aft").click(function(){
    $("p").after("<?php aft(); ?>")//"after"
});
  $("#bef").click(function(){
    $("p").before("<?php bef(); ?>")//"before"
});
});

</script>


<button id="app">Append</button>
<button id="pre">Prepend</button>
<button id="aft">After</button>
<button id="bef">Before</button>

<div class="para">

<p>Training with </p>

</div>














<?php include'inc/footer.php'; ?>
