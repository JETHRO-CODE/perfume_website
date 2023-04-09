function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  window.onmouseover = function(e) {
    if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.add('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }



var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,3000);


function nextSlide() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide+1)%slides.length;
    slides[currentSlide].className = 'slide showing';
}



function increment() {
    
  document.getElementById('demoInput').stepUp();}

  function decrement() {

  document.getElementById('demoInput').stepDown(); }

  function increment1() {
    
    document.getElementById('demoInput1').stepUp();}
  
    function decrement1() {
  
    document.getElementById('demoInput1').stepDown(); }

    function increment2() {
    
      document.getElementById('demoInput2').stepUp();}
    
      function decrement2() {
    
      document.getElementById('demoInput2').stepDown(); }

    

//Jquery Codes

  $("#test").click(function() 
  { alert("clicked");
    
  });   

  // A $( document ).ready()
$( document ).ready(function() {
  console.log( "ready!" );
});

//Target HTML elements with selectors using jQuery
$( ".button_container :button" );

//Target elements by class using jQuery

$(document).hover(function() {
  var divHover = $(".reservation_btn").width();
    
  $(".reservation_btn").mouseenter(function(){
    $(this).css("background-color", "yellow");
     
  }).mouseleave(function(){
    $(this).css("background-color", "white");
  });
});


//Target elements by ID using jQuery

$(document).hover(function() {
  var divHover = $("#home").width();
    
  $("#home").mouseenter(function(){
    $(this).css("background-color", "white");
     
  }).mouseleave(function(){
    $(this).css("background-color", "black");
  });
});

//Delete your JQuery functions
$(document).ready(function() {
  $("button").click(function() {
      $("p").remove();
  });
});


//Target the same elements with multiple JQuery selectors

$(document).ready(function() {
  var divWidth = $(".order_img,.order_details").width();
    
  $(".order_img,.order_details").mouseenter(function(){
      $(this).animate({
          width: "300"
      });
  }).mouseleave(function(){
      $(this).animate({
          width: divWidth
      });
  });
});







//From this point Jquery codes have effect in dashboard.html

//Removing class with Jquery

/*$(document).ready(function () {
  $("button").click(function () {
      $("p").removeClass();
  });
});*/



//Change css of an element using Jquery
$(document).ready(function() {
  var divWidth = $(".book_now").width();
    
  $(".book_now").mouseenter(function(){
      $(this).animate({
          width: "200"
      });
  }).mouseleave(function(){
      $(this).animate({
          width: divWidth
      });
  });
});


//Disable an element using JQuery
function enable_disable() {
  $("#input").prop('disabled', true);
}

//Remove an element using JQuery
/*$( "button" ).click(function() {
  $( "p" ).remove();
});*/


//Use append to move elements using JQuery
function myAppend() {
  $("#parent").append($("#child"));
}

//Clone an element using JQuery
$(document).ready(function () {
  $("button").click(function () {
      $("p").clone().appendTo("body");
  });
});

$(document).ready(function(){
  $(".elements").click(function(){
    $(".element").clone().appendTo("body");
  });
});


//Target the parent of an element using JQuery
$(document).ready(function() {
  $(".target").parent().css({
      "color": "green",
      "border": "3px solid blue"
  });
});

//Target the child of an element using JQuery
$(document).ready(function(){
  $(".child").children().css({"color": "red", "border": "2px solid red"});
});

//Target even numbered elements using JQuery
$(document).ready(function(){  
  $("#evenelements").click(function() {  
  $(".evens").even().css("background-color", "yellow");  
  });  
  });  

//Use JQuery to modify the entire page.



$(document).ready(function(){
  $(".delicious").hide(0).delay(500).fadeIn(3000)
});


$(document).ready(function(){
  $(".modify").hide(0).delay(500).fadeIn(6000)
});


//dropdown
/*$(".dropbtn").click(function(){
  $("#myDropdown").fadeToggle(slow)
});*/
