 ( function( $ ) {
  
  $(window).load( function() {
                 resizeSpacers(true);
                 }
                 )
  
  $(window).resize( function(){
                   resizeSpacers(false);
                   }
                   )
  
  var currentTextsWidth = 0;
  
  function resizeSpacers(onLoad){

    var menu = document.getElementById('menu');
  var texts = menu.getElementsByClassName('menuItem');
  var spacers = menu.getElementsByClassName('spacer');
  
  var textsWidth = 0;
  for(var i = 0; i < texts.length; i++){
  textsWidth += texts[i].offsetWidth;
  }
  
  var spacerWidth = 'calc((76vw - ' + textsWidth + 'px) / ' + spacers.length + ' - 1px)';
  
  for(var i = 0; i < spacers.length; i++){
    spacers[i].style.width = spacerWidth;
  }
  
  }
  
  } )( jQuery );
