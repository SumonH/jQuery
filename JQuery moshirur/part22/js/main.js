//
// $(document).ready(function(){
//   $("h2").siblings().css({// all tag color without thats tag there "h2"
//     "color" :"red",
//     "border": "2px solid red"
//   });
//   });


  // // another program
  //
  // $(document).ready(function(){
  //   $("h2").siblings("p").css({
  //     "color" :"red",
  //     "border": "2px solid red"
  //   });
  //   });

  //
  // // another program
  //
  // $(document).ready(function(){
  //   $("h2").next().css({
  //     "color" :"red",
  //     "border": "2px solid red"
  //   });
  //   });



    // // another program
    //
    // $(document).ready(function(){
    //   $("h2").nextAll().css({ //after "h2" all red
    //     "color" :"red",
    //     "border": "2px solid red"
    //   });
    //   });

    // // another program
    //
    // $(document).ready(function(){
    //   $("h2").nextUntil("a").css({ // after "h2" before "a"
    //     "color" :"red",
    //     "border": "2px solid red"
    //   });
    //   });


    // // another program
    //
    // $(document).ready(function(){
    //   $("h2").prev().css({ // color only ager "h2"
    //     "color" :"red",
    //     "border": "2px solid red"
    //   });
    //   });

    // another program

    $(document).ready(function(){
      $("h2").prevUntil("button").css({ // color after "h2" all
        "color" :"red",
        "border": "2px solid red"
      });
      });
