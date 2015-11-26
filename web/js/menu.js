/* 
    Created on : 11/11/2015, 10:12:53 PM
    Author     : Luis david sicua 
*/

(function($) {
  var $contenido = $(".contenido").hide(),
    $tab = $('#tab'),
    $tab_interna = $('#tab_interna'),
    $panel = $('#panel'),$abre_tab = $('a#abre_tab');

  $abre_tab.on('click', function(e) {
    e.preventDefault();
  });

  $tab.toggle(function() {
    $tab.stop().animate({
      right: "400px"
    }, 500, function() {
      $tab_interna.addClass('expandida');
    });

    $panel.stop().animate({
      width: "400px",
      opacity: 0.8
    }, 500, function() {
      $contenido.fadeIn('slow');
    });
  }, function() {
    $contenido.fadeOut('slow', function() {
      $tab.stop().animate({
        right: "0"
      }, 500, function() {
        $tab_interna.removeClass();
      });
      $panel.stop().animate({
        width: "0",
        opacity: 0.1
      }, 500);
    });
  });
})(jQuery);


