 ( function( $ ) {
  
  $(window).load( function() {
                 //setTimeout(function(){
                            resizeSpacers(true);
                            //}, 2000);
                 
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
  
  var spacerWidth = Math.floor((0.76 * document.body.offsetWidth - textsWidth) / spacers.length) + 'px';
  
  for(var i = 0; i < spacers.length; i++){
    spacers[i].style.width = spacerWidth;
  }
  
  }
  
  } )( jQuery );
