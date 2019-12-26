<?php include 'inc/header.php'; ?>

<div class="para">


<script>

  $(document).ready(function (){
    var tech = [
      "Php",
      "Java",
      "jQuery",
      "javaScript",
      "Perl",
      "Ruby",
      "Swing"
    ];
    $("#gettech").autocomplete({
      source:tech,
      autoFocus:true,
      minLength:2,
      delay:500
    });
  });


</script>
<p>Type 2 letter....ph, ja, cs, sw...</p>
<label for="gettech">Type Technology Name:</label>
<input type="text" id="gettech">




</div>

<?php include'inc/footer.php'; ?>
