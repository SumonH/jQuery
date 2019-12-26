<?php include 'inc/header.php'; ?>

<div class="para">
<style>
  .box{
    background: #eee; border: 2px solid #666; display: inline-table;font-size: 18px;padding: 5px;width: 250px;
  }
  li{
    font-size: 18px;
  }
</style>

<script>

  $(document).ready(function(){
    $("#techlist li").draggable({
      helper:'clone',
      revert: 'invalid'
    });
    $("#phpFramework").droppable({
      accept:'li[data-value="php"]',
      drop:function(event, ui){
        $("#php").append(ui.draggable);
      }
    });



    $("#javaFramework").droppable({
      accept:'li[data-value="java"]',
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
