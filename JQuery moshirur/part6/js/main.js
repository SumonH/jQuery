$(document).ready(function(){
  $("button").click(function(){
    $('.box1').fadeIn();             // clicking will show
    $('.box2').fadeIn('slow');
    $('.box3').fadeIn(2000);
  });
});

// ANOTHER PROGRAM
//
//  $(document).ready(function(){
//   $("button").click(function(){
//     $('.box1').fadeOut();              //clicking will hide
//     $('.box2').fadeOut('slow');
//     $('.box3').fadeOut(2000);
//   });
// });

// ANOTHER PROGRAM

//  $(document).ready(function(){
//   $("button").click(function(){
//     $('.box1').fadeToggle();                    //clicking will hide and show
//     $('.box2').fadeToggle('slow');
//     $('.box3').fadeToggle(2000);
//   });
// });


// ANOTHER PROGRAM

//  $(document).ready(function(){
//   $("button").click(function(){
//     $('.box1').fadeTo('slow', 0.3);        //clicking will opecity
//     $('.box2').fadeTo('slow', 0.5);       // 'slow is sprtparemitter' " o.5 opecity value"
//     $('.box3').fadeTo('slow', 0.7);
//   });
// });
