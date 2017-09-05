jQuery(function($) {
  "use strict";


var loading=false;
$(window).scroll(function()
{
	if($(this).scrollTop() > 5)
    {
		if(loading==false) {
		$("#loading").show();	
		loading=true;

        $.post('/rss.php', function(html){
         	$("#show_rss").html(html); 
			$('#loading').hide(); 
			})
		}
    }

});  

	setTimeout(function() {
	  $.post('/rss_right.php', function(html){
		$("#show_right").html(html); //append received data into the element
		$('#loading1').hide(); //hide loading image once data is received
		})
	}, 1000);


/*$("nav ul.navbar-nav > li").hover(function(){
	$(this).find('ul.dropdown-menu').css({visibility:"visible",display:"none"}).slideDown(400);},
	function(){$(this).find('ul.dropdown-menu').css({visibility:"hidden"});
});*/
  


	
$("#selectus-carousel").owlCarousel({

navigation : true, // Show next and prev buttons
navigationText: ["<img src='../images/prev_selectus.png' alt='prev' />", "<img src='../images/next_selectus.png' alt='next' />"],
slideSpeed : 800,
pagination:true,
items : 3,
itemsDesktop : [1199, 3],
itemsDesktopSmall : [979, 2],
itemsTablet : [768, 2],
itemsMobile : [479, 1],
autoPlay : true,
rewindNav: true,
stopOnHover:true

});	

$("#partners-carousel").owlCarousel({

navigation : true, // Show next and prev buttons
navigationText: ["<i class='fa fa-chevron-circle-left'></i>", "<i class='fa fa-chevron-circle-right'></i>"],
slideSpeed : 800,
pagination:true,
items : 1,
itemsDesktop : [1199, 1],
itemsDesktopSmall : [979, 1],
itemsTablet : [768, 1],
itemsMobile : [479, 1],
autoPlay : false,
rewindNav: true,
stopOnHover:true

});	

	
//wow
new WOW().init();

});

$( document ).ready(function(){
	$(".btn-service-add").click(function(){
		// $(".service-add").slideDown(300);
		if(($(".service-add").is(':visible'))) {
			$(".service-add").fadeOut(200);
		}
		else if((!$(".service-add").is(':visible'))) {
			$(".service-add").fadeIn(200);
		}
		return false;
	})
	
	$('.container-item .item .firstcol > a').click(function() {
		$.each($('.sub-rows'),function(){
			$(this).slideUp('normal');
		});//an toan bo tab_content
		
		var checkElement = $(this).parent('.firstcol').parent('.item').next();
		if((checkElement.is('.sub-rows')) && (checkElement.is(':visible'))) {
			checkElement.slideUp('normal');
		}
		else if((checkElement.is('.sub-rows')) && (!checkElement.is(':visible'))) {
			checkElement.slideDown('normal');
		}
		
		if(checkElement.length == 0) {
			return true;
		} else {
			return false;	
		}	

	});
});