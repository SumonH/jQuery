<?php include 'inc/header.php'; ?>

<div class="para">



<script>
  $(document).ready(function(){
    $("#menu").menu();
  });
</script>

<style>
  .menustyle{
    width:200px;
  }
</style>

<div class="menustyle">
<ul id="menu">
  <li>Website Design
    <ul>
      <li>HTML</li>
      <li>CSS</li>
      <li>Bootstrap</li>
    </ul>
  </li>
  <li> Web Development
      <ul>
      <li>PHP</li>
      <li>JAVA

        <ul>
          <li>JSP</li>
          <li>JSF</li>
          <li>Spring</li>
        </ul>

      </li>
      <li>Pytho</li>
    </ul>
  </li>
  <li class="ui-state-disabled">SEO</li>
  <!-- SEO will be hide -->
  <li>Blogging</li>
</ul>

</div>
</div>


<?php include'inc/footer.php'; ?>
