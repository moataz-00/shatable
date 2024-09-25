$(document).ready(function(){





    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });





    AOS.init();
    new PureCounter();
	// responsive nav
	var responsiveNav = $('#toggle-nav');
	var navBar = $('.nav-bar');

	responsiveNav.on('click',function(e){
		e.preventDefault();
		console.log(navBar);
		navBar.toggleClass('active')
	});

	// pseudo active
	if($('#docs').length){
		var sidenav = $('ul.side-nav').find('a');
		var url = window.location.pathname.split( '/' );
		var url = url[url.length-1];

		sidenav.each(function(i,e){
			var active = $(e).attr('href');

			if(active === url){
				$(e).parent('li').addClass('active');
				return false;
			}
		});
	}

});

hljs.configure({tabReplace: '  '});
hljs.initHighlightingOnLoad();


