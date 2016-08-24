$('.close-tab').on('click',function(event){
  event.preventDefault();
  $(this).parent().removeClass('active');
  $(".nav-tabs li").removeClass('active');
});

$("[data-toggle='reveal']").on('click',function(event){
    event.preventDefault();
    var id = $(this).attr("href");
    var show= $(this).parents(".card").siblings(".show-reveal");
    $(this).remove();
    $(id).clone().appendTo(show);

});
