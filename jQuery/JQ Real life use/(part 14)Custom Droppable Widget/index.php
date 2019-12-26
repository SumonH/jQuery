<?php include 'inc/header.php'; ?>

<div class="para">
<style>


  .box{
    background: #eee; border: 2px solid #666; display: inline-table;font-size: 18px;padding: 5px;width: 250px;
  }
  li{
    font-size: 18px;
  }

  .widgethover{
    background: #666;border: 2px solid #000;color: #fff;
  }

</style>

<script>

  $(document).ready(function(){
    $("#techlist li").draggable({
      helper:function(){
        return "<u><b>"+$(this).text()+"</b></u>";
      },
      revert: 'invalid'
    });
    $("#phpFramework").droppable({
      accept:'li[data-value="php"]',
 //  IT IS A WAY
      // over: function(event, ui){
      //   $(this).addClass('widgethover');
      // },
      //
      // out: function(event, ui){
      //   $(this).removeClass('widgethover');
      // },


      //hoverClass:'widgethover',


      // activate: function(event, ui){
      //   $(this).addClass('widgethover');
      // },
      // deactivate: function(event, ui){
      //   $(this).removeClass('widgethover');
      // },

      activeClass:'widgethover',




      drop:function(event, ui){
        $("#php").append(ui.draggable);
      }
    });

    $("#javaFramework").droppable({
      accept:'li[data-value="java"]',

        //when we take framework there place will be color change

      //hoverClass:'widgethover',





//when we select framewokr will be hilight this dastination


      // activate: function(event, ui){
      //   $(this).addClass('widgethover');
      // },
      //
      // //when we select framewokr again will be give up  then also hilight give up
      // deactivate: function(event, ui){
      //   $(this).removeClass('widgethover');
      // },


      activeClass:'widgethover',
      drop:function(event, ui){
        $("#java").append(ui.draggable);
      }
    });


  });

</script>



<div class="box">
  PHP & JAVA Framework <hr>
  <ul id="techlist">
    <li data-value="php">codeIgniter</li>
    <li data-value="php">cakePHP</li>
    <li data-value="php">kohana</li>

    <li data-value="java">Hibernate</li>
    <li data-value="java">Spring</li>
    <li data-value="java">Struts 2</li>
  </ul>
</div>

<div class="box" id="phpFramework">
  PHP Framework<hr>
  <ul id="php"></ul>
</div>


<div class="box" id="javaFramework">
  JAVA Framework <hr>

  <ul id="java"></ul>
</div>







</div>

<?php include'inc/footer.php'; ?>
