$(function(){

  $(".button").click(function(){
    $(".upload__modal--window,.upload__modal--overlay").fadeIn();
  });

  $(".upload__modal--close").click(function(){
    $(".upload__modal--window,.upload__modal--overlay").fadeOut();
  });

  $(".sp__header--humberger").click(function(){
    $(this).toggleClass("active");
    if($(this).hasClass("active")){
      $(".sp__nav").fadeIn();
    }else{
      $(".sp__nav").fadeOut();
    }
  });
  
});