<?php include 'inc/header.php'; ?>

<div class="para">
<style>

li{
  display: inline-block;padding: 15px; border: 1px solid #666;cursor: pointer;
}

.ui-selected{
  background: #666;color: #fff;
}
.ui-selecting{
  background: red;color: #fff;
}


</style>


<script>




  $(document).ready(function (){
    $("#javaitem").selectable({
      stop:function(){
        var output="";
        $(".ui-selected").each(function(){
          output+=$(this).text()+"<br />";
        });
        $("#state").html(output);
      }
    });

  });

</script>





<ul id="javaitem">

  <li class="ui-selected">Servlets</li>
  <li class="ui-selected">JSP</li>
  <li class="ui-selected">JSTL</li>
  <li class="ui-selected">Struts 2.0</li>
  <li class="ui-selected">Jasper Report</li>
  <li class="ui-selected">Spring</li>


</ul>

 <br>
 You selected:
 <div id="state"></div>







</div>

<?php include'inc/footer.php'; ?>
