/*********************************************************
  * ELATION LIQUID THEME - global Actions
  * (c) elation3ase, elationbase.com
  * (i) elationbase@gmail.com
  * See licence agreement in theme's root (licence.txt)
*********************************************************/

function findMobile() {
	var useragentstring=navigator.userAgent.toLowerCase();
	var mobilelist=new Array("iphone os 5","ipad; cpu os 5","iphone","ipad","android 2","android","blackberry","palmos", "windows phone");
	for (var device in mobilelist) {	
		if (useragentstring.indexOf(mobilelist[device])>=0) {
			return mobilelist[device];
			break;
		}
	}	
};

function fixScroll() {
	whatMobile=findMobile();
	if ((whatMobile=='ipad')||(whatMobile=='iphone')||(whatMobile=='android 2')||(whatMobile=='windows phone')) {
		window.onscroll = function() {
		  $('#eb-phone-footer').css("top", (window.pageYOffset + window.innerHeight - 45) + 'px');
		};
	}
} ;
/*
  * Normalized hide address bar for iOS & Android
  * (c) Scott Jehl, scottjehl.com
  * MIT License
*/
(function( win ){
	var doc = win.document;
	if( !location.hash && win.addEventListener ){
		window.scrollTo( 0, 1 );
		var scrollTop = 1,
			getScrollTop = function(){
				return win.pageYOffset || doc.compatMode === "CSS1Compat" && doc.documentElement.scrollTop || doc.body.scrollTop || 0;
			},
			bodycheck = setTimeout(function(){
				if( doc.body ){
					clearInterval( bodycheck );
					scrollTop = getScrollTop();
					win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
				}	
			}, 15 );
		
		win.addEventListener( "load", function(){
			setTimeout(function(){
				if( getScrollTop() < 20 ){
					win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
					$('#eb-phone-footer').css("top", (window.pageYOffset + window.innerHeight - 45) + 'px');
				}
			}, 0);
		} );
	}
})( this );
	
	
$(document).ready(function() {
// PRODUCT GALLERY COLORBOX
	$(".cbox").colorbox({rel:'group1',width:"90%", height:"90%"});

// LOAD FOOTER MOBILE NAVIGATION
	$('#mobile-nav').click (function () {
		$('#mobile-nav').colorbox({href: $('#mobile-nav').attr('href') + " #listpage_content", width:"100%", height:"100%"});
	});
	$("#cboxContent ul > li").live('mouseover', function() {
		$("#cboxContent ul > li").children("ul").hide().stop(true,true);
		$(this).children("ul").show().stop(true,true);
	});
	
// CONVERT COMBO BOXES
	if (!$.browser.opera) {
		// select element styling
		$('select.eb-select').each(function(){
			var title = $(this).attr('title');
			if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
			$(this)
				.css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
				.after('<span class="eb-select">' + title + '</span>')
				.change(function(){
					val = $('option:selected',this).text();
					$(this).next().text(val);
					})
		});
		$('select.eb-select').mouseover(function(){$(this).next('span.eb-select').css("background-position","bottom left");});
		$('select.eb-select').mouseout(function(){$(this).next('span.eb-select').css("background-position","top left");});
	};
	
// Mobile Options on Footer
	$("#mobile-options").click(function () {
		event.preventDefault();
		$("#eb-options-pop").slideToggle(200).toggleClass('eb-pop-mobile');
	});
	


// JS Target Computer
	if (screen.width >= 1025) {
// Tipsy
		$("#eb-product-list img").tipsy(						{ title: 'alt', gravity: 's',fade: true, offset: -30, live: true });
		$("#view_scroll_left").tipsy(							{ gravity: 'w',fade: true, live: true, offset: 0 });
		$("#view_scroll_right").tipsy(							{ gravity: 'e',fade: true, live: true, offset: 0 });
		$("#eb-options-pop li").tipsy(							{ gravity: 'e',fade: true, live: true, offset: 0 });
		$("#thumbs_list_frame img").tipsy(						{ title: 'alt', gravity: 'n',fade: true, live: true, offset: 0 });
		$(".myaccount_lnk_list a").tipsy(						{ gravity: 's',fade: true, live: true, offset: 0 });
		$("#crossselling li a").tipsy(							{ title: 'original-title', gravity: 's',fade: true, live: true, offset: 0 });
		$("#crossselling_scroll_left").tipsy(					{ gravity: 'w',fade: true, live: true, offset: 0 });
		$("#crossselling_scroll_right").tipsy(					{ gravity: 'e',fade: true, live: true, offset: 0 });
		$("#productscategory_list li a ").tipsy(				{ title: 'original-title', gravity: 's',fade: true, live: true, offset: 0 });
		$("#productscategory_scroll_left").tipsy(				{ gravity: 'w',fade: true, live: true, offset: 0 });
		$("#productscategory_scroll_right").tipsy(				{ gravity: 'e',fade: true, live: true, offset: 0 });
		$(".addthis_toolbox a").tipsy(							{ gravity: 'sw',fade: true, live: true, offset: 0 }); 
		$("#color_to_pick_list li a").tipsy(					{ gravity: 's',fade: true, live: true, offset: 0 });
		$("#paiement_logo_block_left img").tipsy(				{ title: 'alt', gravity: 's',fade: true, live: true, offset: 0 });
		$("#eb-social li a").tipsy(								{ gravity: 'n',fade: true, delayIn: 300, live: true, offset: 0 });
		$(".add-disable").tipsy(								{ gravity: 'sw',fade: true, live: true, offset: 0 });
		$("#eb-product-list .ajax_add_to_cart_button").tipsy(	{ gravity: 'sw',fade: true, delayIn: 300, live: true, offset: 0 });
		$("#eb-product-list .eb-view-item").tipsy(				{ gravity: 'sw',fade: true, delayIn: 300, live: true, offset: 0 });
		$(".eb-layout-column").tipsy(							{ gravity: 'se',fade: true, live: true, offset: 0 });
		$(".eb-layout-row").tipsy(								{ gravity: 'sw',fade: true, live: true, offset: 0 });
		$(".cart_quantity_up, .cart_quantity_down").tipsy(		{ gravity: 'w',fade: true, live: true, offset: 0 });
		$(".remove_link a, .view_link a").tipsy(				{ gravity: 'e',fade: true, live: true, offset: 0 });
		$("#eb-product-manu a").tipsy(							{ gravity: 'w',fade: true, offset: 0, live: true });
		$(".flexslider a").tipsy(								{ gravity: 'nw',fade: true, offset: 0, live: true });
		
	};
// JS Target Device
	if (screen.width <= 1024) {
	// Touch Drag Gallery Thumbs
	
		$( "#thumbs_list_frame" ).draggable(					{ axis: "x" });
		$( "#productscategory_list ul" ).draggable(				{ axis: "x" });
		$( "#crossselling_list ul" ).draggable(					{ axis: "x" });
	};
// JS Target Tablet Portrait
	if (screen.width <= 768) {

	};
// JS Target Mobile
	if (screen.width <= 480) {
		fixScroll();
	};
});