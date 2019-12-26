<?php include 'inc/header.php'; ?>

<div class="para">


<script>

  $(document).ready(function(){
    $("#imgHeight, #imgWidth").slider({
      min: 100, max: 500, slide: controlImg
    });

    $("#imgOpacity").slider({
      min: 0, max: 100, value: 100, slide: controlImg
    });

    function controlImg(){
      var height = $("#imgHeight").slider('value');
      var width = $("#imgWidth").slider('value');
      var opacity = $("#imgOpacity").slider('value');
      $("#liveimg").css({
        height:height, width:width, opacity:opacity/100
      });

      $("#state").html("Height: "+height+" pixels<br/>"+
                        "Width: "+width+" pixels<br/>"+
                        "opacity: "+opacity/100);
    }
  });

</script>

<div id="imgHeight"></div><br>
<div id="imgWidth"></div><br>
<div id="imgOpacity"></div><br>

<div id="state"></div><br>


<img  id="liveimg"src="img/t1.jpg" style="height:100px;width:150px;">














</div>

<?php include'inc/footer.php'; ?>
