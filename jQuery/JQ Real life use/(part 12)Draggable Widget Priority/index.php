<?php include 'inc/header.php'; ?>

<div class="para">
<style>
.ourDiv{
  height: 200px; width: 200px; color: #fff;display: table-cell;vertical-align: middle;text-align: center;
}
.outerdiv{
  width: 250px; height: 250px; border: 2px solid #666;
}
</style>

<script>

  $(document).ready(function(){
    $(".ourDiv").draggable();
    $(".ourDiv").mousedown(function(){
       var maxzindex = 0;
       $(this).siblings('.ourDiv').each(function(){
         var currentzindex = Number($(this).css('z-index'));
         maxzindex =  currentzindex > maxzindex ? currentzindex : maxzindex;

       });
       $(this).css('z-index',maxzindex+1);
    });
  });

</script>
<div  class="ourDiv" style="background:green">green</div>
<div class="ourDiv" style="background:red">red</div>
<div class="ourDiv" style="background:blue">blue</div>
<div  class="ourDiv" style="background:brown">brown</div>
<br>
<div id="outeroption" class="outerdiv"></div>











</div>

<?php include'inc/footer.php'; ?>
