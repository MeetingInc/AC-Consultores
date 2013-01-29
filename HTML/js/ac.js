// AC Consultores

// <![CDATA[
$(document).ready(function(){
	
	//slider home
	$("#chained").scrollable({circular: true, mousewheel: false}).navigator().autoscroll({
		interval: 10000
	});	
	
	//tabs productos, etc
	$("ul.tabsF").tabs("div.cTabs > div", {effect: 'fade', fadeOutSpeed: 600, fadeInSpeed:400});
	  
	//Aviso legal
	$(".inline").colorbox({iframe:true, width:740, height:600});
	$(".iframeMap").colorbox({inline:true, width:740, height:600});
	  
	//Desplegar submenu
	  $('li.products a').toggle(function() {
		$('.menu ul li a').removeClass('active');
		$('ul.dropdown').fadeIn('slow');
	  }, function() {
		$('ul.dropdown').fadeOut('slow');
	  });
	  $('ul.dropdown').hover(function() {
		$('li.products a').addClass('active');
		$('this').show('');
	  }, function() {
		$('this').hide('');
	 });
	 
	
});
// ]]>

