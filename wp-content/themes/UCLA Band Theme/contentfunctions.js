 ( function( $ ) {
  
  $(window).load( function() {
                 makePage(true);
                 }
                 )
  
  $(window).resize( function(){
                   makePage(false);
                   }
                   )
  
  var currentStacked = false;
  
  function makePage(onLoad){
  
  var contentArea = document.getElementById('contentArea');
  
  var parent = global_vars.parent;
  var subpages = global_vars.subpages;
  var subpageLinks = global_vars.subpageLinks;
  var title = global_vars.title;
  var content = global_vars.content;
  var id = global_vars.id;
  
  if(parent == null){
    return;
  }
  
  var stacked = contentArea.offsetWidth < 600;
  
  if (/Mobi/.test(navigator.userAgent)) {
  stacked = true;
  }
  
  if(!onLoad && currentStacked == stacked){
    return;
  }
  currentStacked = stacked;
  
  var result = '<table>';
  
  if(stacked){
    result += '<tr><td style="width: 80vw">' + parentView(parent, subpages, subpageLinks, id) + '</td></tr>';
  result += '<tr><td style="width: 80vw">' + contentView(title, content, stacked) + '</td></tr>';
  }else{
    result += '<tr><td style="width: calc(10vw + 80pt)">' + parentView(parent, subpages, subpageLinks, id) + '</td>';
    result += '<td style="width: calc(70vw - 96pt); padding-left: 16pt;">' + contentView(title, content, stacked) + '</td></tr>';
  }
  
  result += '</table>';
  
  contentArea.innerHTML = result;
  }
  
  function parentView(page, subpages, links, id){
  var result = '<div align="center" class="card">';
  result += '<p class="title">' + page.post_title + '</p>';
  result += '<p>' + page.post_content + '</p>';
  
  for(var i = 0; i < subpages.length; i++){
  result += '<a class="button" href="' + links[i] + '"><p ';
  if(subpages[i].ID == id){
  result += 'style="background-color: #0073cf; color: #ffcf00;"';
  }else{
  
  }
  result += '>' + subpages[i].post_title + '</p></a>';
  }
  result += '</div>';
  return result;
  }
  
  function contentView(title, content, stacked){
  var result = '<div align="center" class="card">';
  result += '<p class="title">' + title + '</p>';
  result += '<div id="content" align="left" style="margin-bottom: 12pt">';
  if(content != null){
  result += content;
  }else if(stacked){
  result += '<p align="center">Click one of the links above for more information.</p>';
  }else{
  result += '<p align="center">Click one of the links to the left for more information.</p>';
  }
  result += '</div></div>';
  return result;
  }
  
  } )( jQuery );
