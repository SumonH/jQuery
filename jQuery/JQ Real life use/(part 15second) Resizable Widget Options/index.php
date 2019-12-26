<?php include 'inc/header.php'; ?>

<div class="para">
<style>
.boxone{
  height: 100px; width: 100px; text-align: center;padding: 10px;color: #fff;
}
.ui-resizable-helper{
  border: 3px dotted #444;
}
.outeroption{
  border: 2px solid #444; width: 500px; height: 300px; padding: 5px;
}

</style>


<script>

  $(document).ready(function(){
    $("#boxone").resizable({
      //animate:true
     //aspectRadio:true
     // containment: "#outeroption"
     //ghost:true
     minHeight:150,
     minWidth:150,
     maxHeight: 200,
     maxWidth: 200
  });
  });

</script>


<div class="boxone" id="boxone"style="background:#666">
  widget one
</div>
</div>




</div>

<?php include'inc/footer.php'; ?>
