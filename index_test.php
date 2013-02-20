<?
$meta_title = 'Date Night Challenge - West Palm Beach, FL';
$meta_description = '';
$meta_keywords = '';
$meta_robots_index = 'index';
$meta_robots_follow = 'follow';
$favicon = '';
$site_url = '/palmbeach/';

$modal_width = 635;
$modal_height = 520;
?>
<!doctype html> 
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?=!empty($meta_title)?$meta_title:$site_name?></title>
<?
// Meta description
if( !empty($meta_description) )
{
?>
<meta name="description" content="<?=$meta_description?>" />
<?
}

// Meta keywords
if( !empty($meta_keywords) )
{
?>
<meta name="keywords" content="<?=$meta_keywords?>" />
<?
}
?>
<meta name="robots" content="<?=$meta_robots_index?>,<?=$meta_robots_follow?>" />
<?
// Fav Icon
if( !empty($favicon) )
{
?>
<link rel="icon" type="image/vnd.microsoft.icon" href="<?=$favicon?>" />
<?
}
?>
<link rel="stylesheet" href="<?=$site_url?>styles/common.v2.css">
<link rel="stylesheet" href="<?=$site_url?>javascript/shadowbox/shadowbox.css">
<!--[if IE 7]><link rel="stylesheet" href="<?=$site_url?>styles/ie7.css"><![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript" language="javascript"></script>
<script src="<?=$site_url?>javascript/shadowbox/shadowbox.js" type="text/javascript" language="javascript"></script>
<script src="<?=$site_url?>javascript/common.js" type="text/javascript" language="javascript"></script>
<script src="../js/ga_scripts.js" type="text/javascript" language="javascript"></script>
<script>
$(document).ready(function(){
	$("a[href]").click(function(){
		console.log($(this).attr("href"));
	});
});
</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=278064572223798";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="mainContainer">

<ul id="mainMenu">
	<li class="mnuProgram"><a href="<?=$site_url?>modal.php?p=program" class="blockLink" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Program</a></li>
	<li class="mnuLocations"><a href="<?=$site_url?>modal.php?p=locations" class="blockLink" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Locations</a></li>
	<li class="mnuConcierge"><a href="<?=$site_url?>modal.php?p=concierge" class="blockLink" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Concierge</a></li>
	<li class="mnuHope"><a href="<?=$site_url?>modal.php?p=hope-help" class="blockLink" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Hope</a></li>
	<li class="mnuHelp"><a href="<?=$site_url?>modal.php?p=corporate" class="blockLink" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Help</a></li>
	<li class="mnuParticipate"><a href="<?=$site_url?>modal.php?p=participate" class="blockLink" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Participate</a></li>
</ul>

<div class="contentContainer">
	<div class="content">
		<? include('content/home.html'); ?>
	</div>
	<div class="video">
		<iframe src="http://player.vimeo.com/video/31350009?title=0&amp;byline=0&amp;portrait=0" width="603" height="334" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe>
	</div>
	<div class="divider"></div>
	
	<div class="newsletter">
		<form id="signUpForm" action="http://datenightchallenge.us2.list-manage.com/subscribe/post?u=7a3be828aa943166b2d1710ef&amp;id=a3679e9746" method="post" target="_blank">
			<div class="field">
				<input type="text" name="EMAIL" value="E-mail Address" class="clearText" />
			</div>
			<div class="button">
				<input type="image" src="<?=$site_url?>images/spacer.gif" name="btn" value="Search" />
			</div>
			<div class="confirm">
				<label for="iCommit">By checking this box I am committing to take the Date Night Challenge</label>
				<input type="checkbox" name="agree" id="iCommit" value="Yes" />
			</div>
		</form>
        <div id="hLine"></div>
        <div id="flashMob">
            <h2><script type="text/javascript">
//######################################################################################
// Author: ricocheting.com
// Version: v2.0
// Date: 2011-03-31
// Description: displays the amount of time until the "dateFuture" entered below.

// NOTE: the month entered must be one less than current month. ie; 0=January, 11=December
// NOTE: the hour is in 24 hour format. 0=12am, 15=3pm etc
// format: dateFuture1 = new Date(year,month-1,day,hour,min,sec)
// example: dateFuture1 = new Date(2003,03,26,14,15,00) = April 26, 2003 - 2:15:00 pm

dateFuture1 = new Date(2012,0,15,17,32,0);

// TESTING: comment out the line below to print out the "dateFuture" for testing purposes
//document.write(dateFuture +"<br />");


//###################################
//nothing beyond this point
function GetCount(ddate,iid){

	dateNow = new Date();	//grab current date
	amount = ddate.getTime() - dateNow.getTime();	//calc milliseconds between dates
	delete dateNow;

	// if time is already past
	if(amount < 0){
		document.getElementById(iid).innerHTML="Now!";
	}
	// else date is still good
	else{
		hours=0;mins=0;secs=0;out="";

		amount = Math.floor(amount/1000);//kill the "milliseconds" so just secs

		hours=Math.floor(amount/3600);//hours
		amount=amount%3600;

		mins=Math.floor(amount/60);//minutes
		amount=amount%60;

		secs=Math.floor(amount);//seconds

		out += "<span id='beBlue'>" + hours +" "+((hours==1)?"HR":"HRS")+"</span>  &nbsp;";
		out += "<span id='beWhite'>" + mins +" "+((mins==1)?"MIN":"MINS")+"</span>  &nbsp;";
		out += "<span id='beGray'>" + secs +" "+((secs==1)?"SEC":"SECS")+"</span>";
		out = out.substr(0,out.length-2);
		document.getElementById(iid).innerHTML=out;

		setTimeout(function(){GetCount(ddate,iid)}, 1000);
	}
}

window.onload=function(){
	GetCount(dateFuture1, 'countbox1');
	//you can add additional countdowns here (just make sure you create dateFuture2 and countbox2 etc for each)
};
</script>
<div id="countbox1"><span id='beBlue'>LOADING...</span></div>
</h2>
            <p id="tag">Until the <a href="http://www.facebook.com/DateNightFlashmob" target="_blank"><img src="/palmbeach/images/fmob.jpg" alt="FLASH MOB™" /></a> strikes Cityplace!</p>
            <a href="http://www.facebook.com/video/?id=125899150857366" target="_blank"><img src="/palmbeach/images/learn.jpg" alt="LEARN THE MOVES!" /></a>
            <p id="more"><a href="https://datenightchallengewestpalm.wufoo.com/forms/date-night-flash-mob/"  rel="shadowbox;width=700;height=<?=$modal_height?>">JOIN US!</a> Don't miss the <a href="http://datenightchallenge.com/palmbeach/Smalley_postcard_cmyk.jpg" target="_blank" rel="shadowbox;width=600;height=400"><b>SMALLEY EVENT!</b></a></p>
        </div>
	</div>
	<div class="clear"></div>
</div>
<div class="socialDiv">
	<ul>
    	<li><a href="http://www.facebook.com/DateNightChallengePalmBeach" target="_blank">facebook</a></li>
        <li><a href="https://twitter.com/#!/DateNightSpark" target="_blank">twitter</a></li>
    </ul>
</div>
<div class="homeLogos">
	<ul>
    	<li id="dda"><a href="http://wpbgo.com/" target="_blank">01</a></li>
    	<li id="dtatg"><a href="http://downtownatthegardens.com/" target="_blank">02</a></li>
    	<li id="cpl2"><a href="http://cityplace.com" target="_blank">03</a></li>
    	<li id="cfa2"><a href="http://chick-fil-a.com" target="_blank">04</a></li>
    </ul>
</div>
<ul id="footerMenu">
	<li>Copyright Date Night Challenge, LLC. All Rights Reserved.</li>
	<li><a href="<?=$site_url?>modal.php?p=contact" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Contact</a></li>
	<li><a href="<?=$site_url?>modal.php?p=about" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">About</a></li>
	<li><a href="<?=$site_url?>modal.php?p=legal" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Legal</a></li>
</ul>

<div class="social">
    <div style="display:block; margin-top:-1px;float:left;" class="fb-like" data-href="http://www.facebook.com/DateNightChallengePalmBeach" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true"></div>
    <div style="display:block; margin-top:-1px;float:left;"><a href="https://twitter.com/datenightspark" class="twitter-follow-button" data-show-count="true" data-lang="en" data-show-screen-name="false">Follow @datenightspark</a></div>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

</div>
	
	
</body>
</html>
