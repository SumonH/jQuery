<?php include 'inc/header.php'; ?>

<div class="para">


<script>

  $(document).ready(function(){
    $("#imgHeight, #imgWidth").slider({
      min: 100, max: 500, slide: controlImg
    });
    function controlImg(){
      var height = $("#imgHeight").slider('value');
      var width = $("#imgWidth").slider('value');
      $("#liveimg").css({
        height:height, width:width
      });

      $("#state").html("Height: "+height+" pixels<br/>"+"Width: "+width+" pixels");
    }
  });

</script>

<div id="imgHeight"></div><br>
<div id="imgWidth"></div><br>

<div id="state"></div><br>


<img  id="liveimg"src="img/t1.jpg" style="height:100px;width:150px;">














</div>

<?php include'inc/footer.php'; ?>
