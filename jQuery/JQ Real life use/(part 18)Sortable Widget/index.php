<?php include 'inc/header.php'; ?>

<div class="para">
<style>

  li{border:1px solid #000;padding: 10px;cursor:pointer; margin:3px;height: 15px;width:300px;color: #000;list-style: none;}

  .ui-sortable-handle{
    background: #666;color: #fff;
  }
  .selecteditem{
    border: 1px solid #000;margin:3px;height: 15px;width:300px;color: #000;list-style: none;background: red;
  }

</style>


<script>




  $(document).ready(function (){
        $("#phpitems").sortable({
          placeholder: 'selecteditem',
          axis: 'y',
          opacity: .5,
          items:'li[data-value="framework"]'
        });
  });

</script>





<ul id="phpitems" class="ui-sortable">
    <li class="ui-sortable-handle" data-value="framework">CodeIgniter</li>
    <li class="ui-sortable-handle" data-value="framework">Symfony</li>
    <li class="ui-sortable-handle" data-value="framework">Kohana</li>
    <li class="ui-sortable-handle" data-value="framework">FuelPHP</li>
    <li class="ui-sortable-handle" data-value="framework">CakePHP</li>
    <li class="ui-sortable-handle" data-value="cms">WordPress</li>
    <li class="ui-sortable-handle" data-value="cms">Drupal</li>
    <li class="ui-sortable-handle" data-value="cms">SliverStripe</li>
</ul>







</div>

<?php include'inc/footer.php'; ?>
