<?php include 'inc/header.php'; ?>

<div class="para">
<style>

  .ui-sortable-handle{
    background: #666;color: #fff;
  }
  ul{float: left;}
  li{
    border: 1px solid #000; padding: 10px 20px; margin: 3px;width: 100px;color: #000;cursor: pointer;list-style: none;
  }

</style>


<script>




  $(document).ready(function (){
    $("#framework, #cms").sortable({
      //connectWith:"#framework, #cms"
      connectWith:'ul[data-value="connect"]'

    });
  });

</script>

<ul id="framework" data-value="connect">

    <li >WordPress</li>
    <li >Symfony</li>
    <li >Kohana</li>
    <li >Joomla</li>
    <li >FuelPHP</li>


</ul>

<ul id="cms" data-value="connect">

    <li >CakePHP</li>
    <li >Mambo</li>
    <li >CodeIgniter</li>
    <li >Drupal</li>
    <li >SliverStripe</li>
</ul>









</div>

<?php include'inc/footer.php'; ?>
