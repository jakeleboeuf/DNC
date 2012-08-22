var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27594018-1']);
  _gaq.push(['_setDomainName', 'datenightpdx.org']);
  _gaq.push(['b._setAccount', 'UA-28745729-1']);
  _gaq.push(['c._setAccount', 'UA-33786841-1']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['b._trackPageview']);
  _gaq.push(['c._trackPageview']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
function clickevent(cat, action, label) {
    _gaq.push(['_trackEvent', cat, action, label]);
    _gaq.push(['b._trackEvent', cat, action, label]);
    _gaq.push(['c._trackEvent', cat, action, label]);
}

var clear_id = 0;

$(document).ready(function() {
	/* Text Clear */
    $("input.clearText, textarea.clearText").each(function () {
		var this_name = $(this).attr("name");
		$(this).attr('clearid', clear_id);
		$(this).after('<input name="dt_' + this_name + '" id="' + clear_id + 'DefaultText" type="hidden" value="' + $(this).val() + '" />');
		clear_id++;
    });
    $("input.clearText, textarea.clearText").focus(function () {
        if( $(this).val() == $("#"+$(this).attr("clearid")+"DefaultText").attr("value") ) {
            $(this).val("");
        }
    });
    $("input.clearText, textarea.clearText").blur(function () {
        if( $(this).val() == '' )  {
            $(this).val( $("#"+$(this).attr("clearid")+"DefaultText").attr("value") );
        }
    });
	
    $("form#signUpForm").submit(function () {
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if( reg.test($("input[name=EMAIL]").val()) == false ) {
			alert('Please enter a valid E-mail Address');
			return false;
		}
        if( ! $("input[name=agree]").is(":checked") )  {
            alert("Please confirm that you are committed to the Date Night Challenege by checking the checkbox.");
			return false;
        }
    });

});
