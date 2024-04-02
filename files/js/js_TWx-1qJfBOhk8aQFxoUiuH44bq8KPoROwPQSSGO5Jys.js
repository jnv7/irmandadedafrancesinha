/* --------------------------------------------- 

* Filename:     custom.js
* Version:      1.0.0 (2015-06-06)
* Website:      http://www.zymphonies.com
                http://www.freebiezz.com
* Description:  System JS
* Author:       Zymphonies Dev Team
                info@zymphonies.com

-----------------------------------------------*/

jQuery(document).ready(function($) {
  
  $('.social-icons li').each(function(){
    var url = $(this).find('a').attr('href');
    if(url == ''){
     $(this).hide();
    }
  });

  $('.nav-toggle').click(function() {
    $('#main-menu div ul:first-child').slideToggle(250);
    return false;
  });
  
  if( ($(window).width() > 640) || ($(document).width() > 640) ) {
      $('#main-menu li').mouseenter(function() {
        $(this).children('ul').css('display', 'none').stop(true, true).slideToggle(250).css('display', 'block').children('ul').css('display', 'none');
      });
      $('#main-menu li').mouseleave(function() {
        $(this).children('ul').stop(true, true).fadeOut(250).css('display', 'block');
      })
        } else {
    $('#main-menu li').each(function() {
      if($(this).children('ul').length)
        $(this).append('<span class="drop-down-toggle"><span class="drop-down-arrow"></span></span>');
    });
    $('.drop-down-toggle').click(function() {
      $(this).parent().children('ul').slideToggle(250);
    });
  }
 

/* JNV */


// Imagem na página inicial
	$(".page-home .slideshow").append("<img src=\"\" width=\"100px\" height=\"70px\"/>");


//MODAIS
	$("a[rel='#overlay']").click(function() {		
	  openmodal($(this).attr("href"), $(this).attr("title"), $(this).attr("height"), $(this).attr("width"));
	  return false;
	});
	
	function openmodal(page, title, height, width) {
	  var $dialog = $('#overlay-div')
	  .html('<div id="overlay-div-int"><iframe style="border: 0px; " src="' + page + '" width="100%" height="100%"></iframe></div>')
	  .dialog({
	    title: title,
	    autoOpen: false,
	    dialogClass: 'dialog_fixed,ui-widget-header',
	    modal: true,
	    height: height,
	    width: width,
	    minWidth: 300,
	    minHeight: 300,
	    draggable:true,
	    //close: function () { $(this).remove(); },
	   // buttons: { "Ok": function () {         $(this).dialog("close"); } }
	  });
	  $dialog.dialog('open');
	} 
});


// Partir os agrupamentos nos X primeiros resultados (temporadas)
function stripGroupedTables(tab, num){
	jQuery(tab + ' tr.group-by-row').each(function(){ 
		jQuery(this).children().each(function(){ 
			$cell = jQuery(this);
			$counter=0;
			if(!$cell.hasClass('group-by-column')){
				$cell.attr("nowrap","nowrap");
				$cell.contents().each(function(){
					$elem = jQuery(this);
					if($elem.is("br")){
						$counter++;
					}
					if($counter>=num && num>0){
						$elem.remove();
					}
					
				});
				
			}
			if($counter==0){$counter++;}
			$max_count=num;
			if($counter<num){
				$max_count=$counter;
			}
			if($cell.hasClass('views-field-counter')){
				$counter=0;
				$str="";
				while($counter<$max_count){
					$counter++;
					$str=$str+$counter+"º";
					if($counter!=$max_count){$str=$str+"<br>";}
				}
				$cell.html($str);
			}
		});
	});
}
;
