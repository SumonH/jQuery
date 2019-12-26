<?php include 'inc/header.php'; ?>

<div class="para">

  <style>
    .mydiv{
      width: 600px; margin: 0 auto;border: 1px solid #000;padding: 5px 10px; font-size: 15px;text-align: justify;
    }
    .liveDiv{
      background: green; color: #000; font-size: 20px; border: 4px solid red; padding: 5px;  width: 500px;
    }
  </style>

<script>

  $(document).ready(function (){
    var classHandle = true;
    $("#showAnimate").click(function(){
      if (classHandle) {
         $("#makeAnimate").addClass('liveDiv',2000,'easeInQuart',function(){
           alert("Animatin completed....");
         });
      }else {
         $("#makeAnimate").removeClass('liveDiv',2000);
      }
      classHandle = !classHandle
    });
  });


</script>

<button id="showAnimate">Animate</button>

<div class="mydiv" id="makeAnimate">

I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.

</div>






</div>

<?php include'inc/footer.php'; ?>
