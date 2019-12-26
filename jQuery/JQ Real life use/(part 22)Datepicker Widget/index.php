<?php include 'inc/header.php'; ?>

<div class="para">


<script>

  $(document).ready(function (){
    $("#showDate").datepicker({
      showOn:'both',
      buttonText:'Show Date',
      dateFormat:'dd/mm/yy',
      numberOfMonths:2,
      changeMonth:true,
      changeYear:true,
    });
  });


</script>
<label for="showDate">Select Date:</label>
<input type="text" id="showDate" value="">






</div>

<?php include'inc/footer.php'; ?>
