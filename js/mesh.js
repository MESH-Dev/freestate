jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!');

  //Let's do something awesome!
  $("#english.transcript-trigger").click(function(){
  	$('body').addClass('fixed');
  	$('.english').fadeIn('slow');
  })

  $("#spanish.transcript-trigger").click(function(){
  	$('body').addClass('fixed');
  	$('.spanish').fadeIn('slow');
  })

  $('.close').click(function(){
  	$('body').removeClass('fixed');
  	$('.transcript-wrapper').fadeOut('slow');
  })


$('.menu-trigger').sidr({
      name: 'sidr-main',
      source: '.main-navigation, .social-list',
      renaming: false,
      side: 'left',
      displace: false,
      // onOpen: function(){
      //   $('.sidr ul li a').append('<span class="open"><img src="../img/TheaterWorks_Icons_Arrow-Bronze.png" ></span>')
      // }

 });//end sidr onOpen function

$('.close').click(
    function(){
      $.sidr('close', 'sidr-main');
       //console.log("Sidr should be closed");
    });

});
