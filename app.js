require('./bootstrap');
import './jquery.fancybox.min';
import './messages';



$(document).ready(function () {

  $('.delete-item').on('click', function(){

    $(this).parents('.item-to-delete').fadeOut(200,
      function () { $(this).parents('.profile').remove() });

   });
});

   /* $(this).parents('.profile').addClass('remove'); */
/*   $(this).parents('.profile').hide();  */


/* $(this).parents('.profile').fadeOut(300, function(){$(this).parents('.profile').remove()}); */

/* setTimeout(function (){

    $(this).parents('.profile').addClass('remove');
    console.log("work2")
  }, 1000); */








