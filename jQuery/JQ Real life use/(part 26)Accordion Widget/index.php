<?php include 'inc/header.php'; ?>

<style media="screen">
.main{
  width: 600px; margin: 0 auto;
}
#accdion{
  font-size: 15px;
}
</style>

<div class="para">


<script>

  $(document).ready(function (){
    $("#accdion").accordion({
      collapsible:true //when clicking shown and hide
    });
  });


</script>


<div class="main">
  <div id="accdion">
    <h3>Tab one</h3>
    <div>
      <p>This is tab one some conent will be give here This is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give here</p>
    </div>
    <h3>Tab Two</h3>
    <div>
      <p>This is tab one some conent will be give here This is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give here</p>
    </div>

    <h3>Tab Three</h3>
    <div>
      <p>This is tab one some conent will be give here This is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give hereThis is tab one some conent will be give here</p>
    </div>
  </div>
</div>






</div>

<?php include'inc/footer.php'; ?>
