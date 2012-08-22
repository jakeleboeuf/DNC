$(document).ready(function() {
	// Slider stuff
	$(function() {
	  // initialize scrollable
	  $(".scrollable").scrollable({circular: true}).autoscroll(8000);
	});
	
	
	// Check if it is the Check-up Page
	var urlParams = {};
	(function () {
	    var match,
	        pl     = /\+/g,  // Regex for replacing addition symbol with a space
	        search = /([^&=]+)=?([^&]*)/g,
	        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
	        query  = window.location.search.substring(1);

	    while (match = search.exec(query))
	       urlParams[decode(match[1])] = decode(match[2]);
	})();
	var page = (urlParams["p"]);
	if(page == 'check-up'){
		   Shadowbox.init({
		    // let's skip the automatic setup because we don't have any
		    // properly configured link elements on the page
		    skipSetup: true
		});

		window.onload = function() {

		    // open a welcome message as soon as the window loads
		    Shadowbox.open({
		        content:    '<iframe style="margin-bottom: -10px;" height="100%" width="100%" frameborder="0" marginwidth="0" marginheight="0" src="https://www.couplecheckup.com/launch/go_nwfs.html"></iframe>',
		        player:     "html",
		        height:     520,
		        width:      750 
		    });

		};
		};
});