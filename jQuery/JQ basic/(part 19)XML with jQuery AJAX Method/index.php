<?php include 'inc/header.php'; ?>


<script>

$(document).ready(function(){
  idbBISEW();
});

function idbBISEW(){
  $.ajax({
    url:"idb1.xml",
    dataType:"xml",
    success: function(data){
      $("ul").children().remove();
      $(data).find("employee").each(function(){
        var alldata = '<li>Name: '+$(this).find("name").text()+'</li><li>Skill: '+$(this).find("skill").text()+'</li><li>Company: '+$(this).find("company").text()+'</li>';
          $("ul").append(alldata);
      });

    },
    error: function(){
      $("ul").append("Error");
    }
  });
}

</script>

<div class="para">
  <ul>

  </ul>

</div>














<?php include'inc/footer.php'; ?>
