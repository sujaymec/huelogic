$(document).ready(function(){

	// Recent Updates : Endless Scroll

    $(window).load(function () {
        $("#s1").endlessScroll({ 
		width: '100%', 
		height: '20px', 
		steps: -2, speed: 40, 
		mousestop: true });
    });
	
	// About Accordion Plus-Minus

	$('a.collapsible').click(function(){
		$('a.collapsible').find('i').removeClass('fa-minus');
		$(this).find('i').addClass('fa-minus');
	})


	// Post your query

	$('button#post-query').click(function(){
		$(this).css('visibility','hidden');
		$('#query-form').css('display','none');
		$('#thank-you').css('display','block');
	})

})