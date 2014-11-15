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

  $(".urtea").on("click", function(){
    console.log($(this));
    console.log($(this).children().next().css('display'));
    if($(this).next().css('display') == 'none')
    {
      $(".kontz-urtea").siblings().children().next().slideUp("slow");
      $(this).next().slideDown("slow");
    }
    else
    {
      $(this).next().slideUp("slow");
    }
  });
      $('#form-kontaktua-ajax').submit(function(e){
        e.preventDefault();
        var $url=$('#form-kontaktua-ajax').attr('action');
        var $formData = $('#form-kontaktua-ajax').serialize();
        console.log($url);
        $.ajax({
            url: $url,
            data: $formData,
            method: 'post',
            dataType: 'json',
            cache: false,
            success: function(data)
            {
                if(data.responseCode==200 )
                {
                    console.log('OK!');
                    $('#form-kontaktua-ajax').find('input:text, input[type="email"], textarea').val('');
                }
                else
                {
                  alert('An unexpected error occured');
                  console.log(data.responseCode);
               }
            },
            error: function(err) {
                console.log(err);
            }
        });
    });
});

