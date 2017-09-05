jQuery(function ($) {
	
	$('.template_colors a').click(function() {
		$('.template_colors a').removeClass('active1');
		$(this).addClass('active1');
		var link=$("#frame").attr('data-link');
		var color=$(this).attr('href');
		var newlink=link+'trang-chu-169.html&color='+color;
		$("#frame").attr('src',newlink);
		//alert(newlink);
		return false;
	})

	
    var calcHeight = function () {
        var headerDimensions = $('#header').height();
        var selector = '#iframelive';
        if ($('#header').hasClass('stick_head')) {
            $(selector).height($(window).height());
        } else {
            $(selector).height($(window).height() - headerDimensions);
        }
    }
    $(document).ready(function () {
        calcHeight();
    });
    $(window).resize(function () {
        calcHeight();
    }).load(function () {
        calcHeight();
    });


    $(window).scroll(function () {

        if ($(this).scrollTop() > 0) {
            $("#header").css({ position: 'relative' });
        } else {
            $("#header").css({ position: 'relative' });
        }

    });

    $("#header").removeClass('closed');

    $("#header span.trigger").click(function (e) {
        $(this).toggleClass("trigger-up");
        $("#header").toggleClass("stick_head");
        calcHeight();
    });

    if ($(window).scrollTop() > 0) {
        $("#header").css({ position: 'relative' });
    } else {
        $("#header").css({ position: 'relative' });
    }
	
	
function setPlatform(id) {
// reset all platform
$("#pc").attr('class', 'pc');
$("#ipadh").attr('class', 'tablet_landscape');
$("#ipadv").attr('class', 'tablet_portrait');
$("#iphoneh").attr('class', 'phone_landscape');
$("#iphonev").attr('class', 'phone_portrait');

// set hover
$("#" + id).addClass("selected");
}

function fix_sizing() {
jQuery('#frame').height(jQuery('body').height() - 50);
jQuery('#frameWrapper').css({ "overflow":'visible' });
}
fix_sizing();
jQuery(window).resize(function () { fix_sizing(); });

jQuery('.responsive a').click(function () {
jQuery('.responsive li').removeClass('active');
jQuery(this).parent('li').addClass('active');

if (jQuery(this).parent('li').hasClass('computer')) {
jQuery('#frameWrapper').css({ "overflow":'visible' });
jQuery('#frame').css({ "width": jQuery(window).width() });
jQuery('#frame').css({ "height": jQuery(window).height() - 55 });
jQuery('#frame').animate({ "width": jQuery(window).width() + 2 });
jQuery('#frame').animate({ "width": jQuery(window).width() });
jQuery('#frameBody').removeClass('ipadh');
jQuery('#frameBody').removeClass('iphoneh');
jQuery('#frameBody').removeClass('iphonev');
jQuery('#frameBody').removeClass('ipad-v');
jQuery('#frameBody').addClass('computer');

} else if (jQuery(this).parent('li').hasClass('tablet')) {
jQuery('#frameWrapper').css({ "overflow-y":'auto' });
jQuery('#frame').css({ "width": 1039 });
jQuery('#frame').css({ "height": 686 });
jQuery('#frame').animate({ "width": 1039 });
jQuery('#frameBody').removeClass('iphoneh');
jQuery('#frameBody').removeClass('iphonev');
jQuery('#frameBody').removeClass('computer');
jQuery('#frameBody').removeClass('ipad-v');
jQuery('#frameBody').addClass('ipadh');


} else if (jQuery(this).parent('li').hasClass('tablet_portrait')) {
jQuery('#frameWrapper').css({ "overflow-y":'auto' });
jQuery('#frame').css({ "width": 785 });
jQuery('#frame').css({ "height": 1039 });
jQuery('#frame').animate({ "width": 785 });
jQuery('#frameBody').removeClass('iphoneh');
jQuery('#frameBody').removeClass('iphonev');
jQuery('#frameBody').removeClass('computer');
jQuery('#frameBody').removeClass('ipadh');
jQuery('#frameBody').addClass('ipad-v');
//jQuery('#frameWrapper').css({'overflow-y':'auto';});
}
else if (jQuery(this).parent('li').hasClass('mobile')) {
jQuery('#frameWrapper').css({ "overflow-y":'auto' });
jQuery('#frame').css({ "width": 497 });
jQuery('#frame').css({ "height": 335 });
jQuery('#frame').animate({ "width": 497 });
jQuery('#frameBody').removeClass('iphonev');
jQuery('#frameBody').removeClass('ipadh');
jQuery('#frameBody').addClass('iphoneh');
jQuery('#frameBody').removeClass('ipad-v');
jQuery('#frameBody').removeClass('computer');

} else if (jQuery(this).parent('li').hasClass('mobile-portrait')) {
jQuery('#frameWrapper').css({ "overflow-y":'auto' });
jQuery('#frame').css({ "width": 337 });
jQuery('#frame').css({ "height": 497 });
jQuery('#frame').animate({ "width": 337 });
jQuery('#frameBody').addClass('iphonev');
jQuery('#frameBody').removeClass('iphoneh');
jQuery('#frameBody').removeClass('ipad-v');
jQuery('#frameBody').removeClass('computer');
}

return false;

});












}); // jQuery End