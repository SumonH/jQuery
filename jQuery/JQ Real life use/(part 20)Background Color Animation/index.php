<?php include 'inc/header.php'; ?>

<div class="para">

  <style>
    .mydiv{
      width: 600px; margin: 0 auto;border: 1px solid #000;padding: 5px 10px; font-size: 15px;text-align: justify;
    }
  </style>

<script>

  $(document).ready(function (){
    var colorHandle = false;
    $("#showAnimate").click(function(){
      var ele = $("#makeAnimate");
        if (colorHandle) {
            ele.animate({
              'font-size':'15',
              'background-color':'#444',
              'color':'#fff',
              'border-color':'#000',
              'border-width':'2'
            });
        }else{
          ele.animate({
            'font-size':'20',
            'background-color':'#fff',
            'color':'#000',
            'border-color':'green',
            'border-width':'5',
            'border-radius':'15'
          });
        }
        colorHandle = !colorHandle;
    });
  });


</script>

<button id="showAnimate">Animate</button>

<div class="mydiv" id="makeAnimate">

I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.I am Sumon Hasan, PHP and JAVA Developer.

</div>






</div>

<?php include'inc/footer.php'; ?>
