<?php include 'inc/header.php'; ?>

<div class="para">



<script>
  $(document).ready(function(){
    $("#textname").tooltip({
      content:tolltipData,
      track:true,
      show:{delay:100, duration:500, effect:'slideDown'},
      hide:{delay:100, duration:500, effect:'slideUp'}
    });
    function tolltipData(){
      return "Data form my functon..";
    }
  });
</script>



<label id="name" for="textname" title="Full Name">Name </label>
<input type="text" id="textname" title="Your name will be here">



</div>



<?php include'inc/footer.php'; ?>
