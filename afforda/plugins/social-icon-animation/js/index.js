// $(document).ready(function() {
//   $('i').hide();
// })

// $(window).load(function() {
  

// })
$(function(){

  $('#footer i').show();
  
    //var twitterPos = $('#twitter').position();
    var facebookPos = $('#facebook').position();
    var githubPos = $('#github').position();
    var stackPos = $('#stack').position();
    var linkedinPos = $('#linkedin').position();
    var codePos = $('#code').position();
    var plusPos = $('#plus').position();
    var mailPos = $('#mail').position();
    var imgPos = $('.cdl-footer-logo').position();
    
    
  $('#footer i').css({
    position: 'absolute',
    zIndex: '1',
    top: imgPos.top + 10,
    left: '47%'
  });

  setTimeout(function() {
    $('#facebook').animate({
      top: facebookPos.top,
      left: facebookPos.left,
      opacity : 1
    }, 250);
    
    $('#linkedin').animate({
      top: linkedinPos.top + 10,
      left: linkedinPos.left - 3,
      opacity : 1
    }, 500);
  }, 500);

  setTimeout(function() {
    $('#linkedin').animate({
      top: linkedinPos.top,
      left: linkedinPos.left,
      opacity : 1
    }, 250);
    
    $('#plus').animate({
      top: plusPos.top + 10,
      left: plusPos.left - 3,
      opacity : 1
    }, 500);
  }, 750);
  
  setTimeout(function() {
    $('#plus').animate({
      top: plusPos.top,
      left: plusPos.left,
      opacity : 1
    }, 250);
    
    $('#mail').animate({
      top: mailPos.top + 10,
      left: mailPos.left + 10,
      opacity : 1
    }, 500);
  }, 1000);
  
  setTimeout(function() {
    $('#mail').animate({
      top: mailPos.top,
      left: mailPos.left,
      opacity : 1
    }, 250);
  }, 1250);

  // setTimeout(function() {
  //   $('#stack').animate({
  //     top: stackPos.top,
  //     left: stackPos.left
  //   }, 250);
    
  //   $('#linkedin').animate({
  //     top: linkedinPos.top + 10,
  //     left: linkedinPos.left
  //   }, 500);
  // }, 1000);
  
  // setTimeout(function() {
  //   $('#linkedin').animate({
  //     top: linkedinPos.top,
  //     left: linkedinPos.left
  //   }, 250);
    
  //   $('#plus').animate({
  //     top: codePos.top + 10,
  //     left: codePos.left + 3
  //   }, 500);
  // }, 1250);
  
  // setTimeout(function() {
  //   $('#code').animate({
  //     top: codePos.top,
  //     left: codePos.left
  //   }, 250);
    
  //   $('#plus').animate({
  //     top: plusPos.top + 10,
  //     left: plusPos.left + 6
  //   }, 500);
  // }, 1500);



    //Left Design

    // $('i').css({
    //   position: 'absolute',
    //   zIndex: '1',
    //   top: imgPos.top,
    //   right : -60
    // });
  
    // setTimeout(function() {
    //   $('#github').animate({
    //     top: githubPos.top,
    //     right: 10
    //   }, 250);
    //   $('#stack').animate({
    //     top: stackPos.top + 10,
    //     right: 60
    //   }, 500);
    // }, 750);
  
    // setTimeout(function() {
    //   $('#stack').animate({
    //     top: stackPos.top,
    //     right: 60
    //   }, 250);
  
    //   $('#linkedin').animate({
    //     top: linkedinPos.top + 10,
    //     right: 110
    //   }, 500);
    // }, 1000);
  
    // setTimeout(function() {
    //   $('#linkedin').animate({
    //     top: linkedinPos.top,
    //     right: 110
    //   }, 250);
  
    //   $('#code').animate({
    //     top: codePos.top + 10,
    //     right: 160
    //   }, 500);
    // }, 1250);
  
    // setTimeout(function() {
    //   $('#code').animate({
    //     top: codePos.top,
    //     right: 160
    //   }, 250);
  
    //   $('#plus').animate({
    //     top: plusPos.top + 10,
    //     right: 210
    //   }, 500);
    // }, 1500);
  
    // setTimeout(function() {
    //   $('#plus').animate({
    //     top: plusPos.top,
    //     right: 210
    //   }, 250);
  
    //   $('#mail').animate({
    //     top: mailPos.top + 10,
    //     right: 270
    //   }, 500);
    // }, 1750);
  
    // setTimeout(function() {
    //   $('#mail').animate({
    //     top: mailPos.top,
    //     right: 270
    //   }, 250);
    // }, 2000);

});