$(document).ready(function(){
  $("span").parents().css({ //when use parent only her before and if used parents her before all
    "color"  :"green",
    "border"  : "2px solid green"
  });
});


// // another program
//
// $(document).ready(function(){
//   $("span").parents("div").css({
//     "color"  :"green",
//     "border"  : "2px solid green"
//   });
// });

// another program

// $(document).ready(function(){
//   $("span").parentsUntil("div").css({
//     "color"  :"green",
//     "border"  : "2px solid green"
//   });
// });
