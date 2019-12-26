// $(document).ready(function(){
// $('p').dblclick(function(){ //when on write double click then hide
//   $(this).hide();
//  });
// });

// AONTHER PROGRAMM

//
// // AONTHER PROGRAMM
// $(document).ready(function(){
// $('p').mouseenter(function(){ //alert when mouse saty on write
//   alert("Hi");
//  });
// });

// // AONTHER PROGRAMM
// $(document).ready(function(){
// $('p').hover(function(){
//   alert("Hi");
//  });
// });

// // AONTHER PROGRAMM

// $(document).ready(function(){
// $('p').hover(function(){
//   alert("Hi");
// },
// function(){
//   alert("Bye");
// });
// });


// AONTHER PROGRAMM

// $(document).ready(function(){
// $('input').focus(function(){
//   $(this).css("background","#ccc"); //when the click bg color  change
//
// });
// });


// AONTHER PROGRAMM

$(document).ready(function(){
$('p').on({
  mouseenter: function(){
    $(this).css("background-color","red");
  },
  mouseleave: function(){
    $(this).css("background-color","green")
  },
  click: function(){
    $(this).css("background-color","yellow")
  }
});


});
