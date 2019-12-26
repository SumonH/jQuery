<?php include 'inc/header.php'; ?>

<style media="screen">
  .maindiv{
    width: 300px; margin: 0 auto;text-align: center;
  }
  #box{
    width: 150px; height: 150px;background: blue;color: #fff;
  }
</style>

<div class="para">


<script>

  $(document).ready(function (){
    $("#box").click(function(){
      // $("#box").effect("shake",{
      //   time:5,
      //   distance:100,
      // }, 5000, function(){
      //   $(this).css("background","red");
      // });



       $("#box").effect({
         effect:"explode",
         easing:"easeInExpo",
         pieces:4,
         duration:4000
       });
    });
  });


</script>



<div class="maindiv">
  <div id="box">Click Here..</div>
</div>



</div>

<?php include'inc/footer.php'; ?>
