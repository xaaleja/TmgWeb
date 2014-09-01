$(document).ready(function() {
  $(".gehiago-ikusi").on("click", function(){
    $(this).prev().slideDown("slow");
    $(this).hide();
    $(this).next().show();
    console.log(this);
  });

  $(".gutxiago-ikusi").on("click", function(){
    $(this).prev().prev().slideUp("slow");
    $(this).hide();
    $(this).prev().show();
    console.log(this);
  });

  $(".letra-ikusi").on("click", function(){
    $(this).parent().prev().parent().parent().next().children().slideDown("slow");
    $(this).hide();
    $(this).next().show();
    console.log(this);
  });

  $(".letra-ezkutatu").on("click", function(){
    $(this).parent().prev().parent().parent().next().children().slideUp("slow");
    $(this).hide();
    $(this).prev().show();
    console.log(this);
  });

  $(".fancybox").fancybox();

  $(".kontz-urtea").on("click", function(){
    $(".kontz-urtea").siblings().children().next().hide();
    $(this).children().next().slideDown("slow");
    console.log($(this).children());
    console.log($(this).siblings().children().next());
  });

});

