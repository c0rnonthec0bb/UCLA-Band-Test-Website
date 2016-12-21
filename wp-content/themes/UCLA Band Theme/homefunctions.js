( function( $ ) {
    $(window).load( function() {
                   makePagePreviews(true);
    })
                      
    $(window).resize( function(){
                     
                     makePagePreviews(false);
    })
 
 var currentNumColumns = 0;
 
 function makePagePreviews(onLoad){
 
 var contentArea = document.getElementById('contentArea');

 var pages = global_vars.pages;
 var pageSubpages = global_vars.pageSubpages;
 var pageSubpageLinks = global_vars.pageSubpageLinks;
 
 var numColumns = Math.max(1, Math.min(pages.length, Math.floor(window.innerWidth / window.innerHeight * 2)));
 
 if(!onLoad && numColumns == currentNumColumns){
    return;
 }
 currentNumColumns = numColumns;
 
 var columnWidth = 'calc((80vw - (' + numColumns + ' -  1) * 16pt) / ' + numColumns + ')';
 
 var pageNumsByColumn;
 
 switch(numColumns){
 default:
 case 1:
 pageNumsByColumn = [[0,1,2,3,4,5,6]];
 break;
 case 2:
 pageNumsByColumn = [[0,1,2,3],[4,5,6]];
 break;
 case 3:
 pageNumsByColumn = [[0,1,2],[3,4],[5,6]];
 break;
 case 4:
 pageNumsByColumn = [[0,1],[2,3],[4],[5,6]];
 break;
 case 5:
 pageNumsByColumn = [[0],[1,2],[3],[4],[5,6]];
 break;
 case 6:
 pageNumsByColumn = [[0],[1,2],[3],[4],[5],[6]];
 break;
 case 7:
 pageNumsByColumn = [[0],[1],[2],[3],[4],[5],[6]];
 break;
 }
 
 var result = '<table style="margin: 0 -8pt;"><tr>';
 
 for(var i = 0; i < pageNumsByColumn.length; i++){
 result += '<td style="padding: 0 8pt; width:' + columnWidth + '">';
 for(var j = 0; j < pageNumsByColumn[i].length; j++){
 var pageNum = pageNumsByColumn[i][j];
 result += pagePreview(pages[pageNum], pageSubpages[pageNum], pageSubpageLinks[pageNum]);
 }
 result += '</td>';
 }
 
 result += '</tr></table>';
 
 contentArea.innerHTML = result;
 }
 
 function pagePreview(page, subpages, links){
 var result = '<div align="center" class="card">';
 result += '<p class="title">' + page.post_title + '</p>';
 result += '<p>' + page.post_content + '</p>';
 
 for(var i = 0; i < subpages.length; i++){
    result += '<a class="button" href="' + links[i] + '"><p>' + subpages[i].post_title + '</p></a>';
 }
 result += '</div>';
 return result;
 }


} )( jQuery );
