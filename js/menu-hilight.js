// hilight current prinary-menu item

// $("document").ready(function(e){
//   $("nav ul li").click(function(e){
//     $("nav ul li").removeClass('current');
//     $(this).addClass('current');
//   })
// });

$("document").ready(function($) {
  var url = document.location.href;
  $.each($("nav ul li a"), function(){
    if(this.href == url){
      $(this).parent("nav ul li").addClass('current');
    }
  });
});
