
// $(document).ready(function(){
//   $("button").click(function(){
//     $("p").prepend("<b>sumon</b>"); //"append" it work wetn button click after write show my name and "prepend" before
//   });
//
// });



// another prgoram


//
// $(document).ready(function(){
//   $("button").click(function(){
//     $("img").after("<b>sumon</b>"); //"before" and "after"
//   });
//
// });

//another program

$(document).ready(function(){
  $("button:first").click(function(){
    $("img").before("<b>sumon</b>");
  });

  $("button:last").click(function(){
    $("img").after("<b>sumon</b>");
  });


});
