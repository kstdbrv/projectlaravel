require('./bootstrap');
import './jquery.fancybox.min';
import './messages';



$(document).ready(function () {

  $('.profile__delete').on('click', function(){

   $(this).parents('.profile').fadeOut(300, function(){$(this).parents('.profile').remove()});

   });
});

   /* $(this).parents('.profile').addClass('remove'); */
/*   $(this).parents('.profile').hide();  */




/* setTimeout(function (){

    $(this).parents('.profile').addClass('remove');
    console.log("work2")
  }, 1000); */








