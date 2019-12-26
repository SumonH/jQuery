
// $(document).ready(function(){
//  $("button").click(function(){
//    $("div").animate({left:'200px'});
//  });
// });

// ANOTHER PROGRAM


// $(document).ready(function(){
//  $("button").click(function(){
//   $("div").animate({
//
//   left: '500px',
//   width: '+=150px', //when give negative value will be small
//   height: '+=150px'
//
//   });
//  });
// });


// // ANOTHER PROGRAM
//
//
// $(document).ready(function(){
//  $("button").click(function(){
//   $("div").animate({
//     height: 'toggle' //will be use height and width
//   });
//  });
// });

// // ANOTHER PROGRAM
//
//
$(document).ready(function(){  //height&width big then again small
 $("button").click(function(){
var sumon = $("div");
sumon.animate({height:'300px',opacity: '0.5'}, "slow");
sumon.animate({width:'300px',opacity: '0.3'}, "slow");
sumon.animate({height:'100px',opacity: '0.4'}, "slow");
sumon.animate({width:'100px',opacity: '1'}, "slow");
 });
});


// ANOTHER PROGRAM


// $(document).ready(function(){
//  $("button").click(function(){
//    var sumon = $("div");
//    sumon.animate({left: '300px'},'slow');
//    sumon.animate({width: '300px'},'slow');
//    sumon.animate({fontSize: '50px'},'fast');
// });
// });
