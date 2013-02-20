<?
$meta_title = 'Date Night PDX :: Portland & Vancouver';
$meta_description = 'The Date Night PDX wants to know... When was your last date? How you answer that question will speak volumes about your most important relationship.';
$meta_keywords = 'Date Night, Date, PDX, Portland, Vancouver, Marriage, Commitment, Things to do, Support, Relationship, Awesome, Kewl, Neat';
$meta_robots_index = 'index';
$meta_robots_follow = 'follow';
$favicon = '';
$site_url = 'http://datenightpdx.org/';

$modal_width = 750;
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
<link rel="stylesheet" href="<?=$site_url?>styles/slider.css">
<link rel="stylesheet" href="<?=$site_url?>styles/slider-buttons.css">
<link rel="stylesheet" href="<?=$site_url?>javascript/shadowbox/shadowbox.css">
<!--[if IE 7]><link rel="stylesheet" href="<?=$site_url?>styles/ie7.css"><![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript" language="javascript"></script>
<script src="<?=$site_url?>javascript/shadowbox/shadowbox.js" type="text/javascript" language="javascript"></script>
<script src="<?=$site_url?>javascript/common.js" type="text/javascript" language="javascript"></script>
<script src="<?=$site_url?>javascript/scripts.js" type="text/javascript" language="javascript"></script>
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=416892218362436";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
<div id="mainContainer">

<ul id="mainMenu">
	<li class="mnuProgram"><a href="<?=$site_url?>modal.php?p=program" class="blockLink" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Program</a></li>
	<li class="mnuLocations"><a href="http://pdx.makeadatenight.com/?page_id=87" class="blockLink" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Deals</a></li>
	<li class="mnuConcierge"><a href="http://pdx.makeadatenight.com/?page_id=106" class="blockLink" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Events</a></li>
	<li class="mnuHope"><a href="<?=$site_url?>modal.php?p=support" class="blockLink" rel="shadowbox;width=750;height=<?=$modal_height?>">Support</a></li>
	<li class="mnuHelp"><a href="https://www.couplecheckup.com/launch/go_nwfs.html" class="blockLink" rel="shadowbox;width=750;height=<?=$modal_height?>">Couples Checkup</a></li>
	<li class="mnuParticipate"><a href="http://partners.datenightpdx.org" class="blockLink" rel="shadowbox;width=645;height=<?=$modal_height?>">Participate</a></li>
</ul>

<div class="contentContainer">
	
	<a class="prev browse left"></a>
	<!-- root element for scrollable -->
	<div class="scrollable" id="scrollable">
		<!-- root element for the items -->
		<div class="items">
		
			<div class="slide_01">
				<div class="content">
					<h1>The Date Night PDX wants to know...</h1>
					<p>when was your last date? How you answer that question will speak volumes about your most important relationship.</p>
					<p>Why? Good relationships don't just happen, research shows that people who have "couple time" weekly were 3.5 times more likely to report being "very happy" in their relationship.</p>
					<p>Date Night PDX challenges you to take <a href="/modal.php?p=program" rel="shadowbox;width=635;height=520">4 Dates in 4 Weeks</a> Your relationship needs YOU!
					</p>
				</div><!-- copy-left -->
				<div class="video">
					<a href="<?=$site_url?>modal.php?p=slide_01" rel="shadowbox;width=800;height=450"><img src="<?=$site_url?>images/pdx_video.png" /></a>
				</div><!-- video -->
			</div><!-- slide_01 -->
			
			<div class="slide_02">
				<div class="content">
					<h1>USA TODAY:</h1>
					<p><em>“The Results Are In! People who have "couple time" at least weekly were 3.5 times more likely to report being "very happy" in their relationship.”</em></p>
					<p>Learn more at <a href="http://www.usatoday.com/news/health/wellness/marriage/story/2012-02-06/Date-night-can-improve-marriage-sexual-satisfaction/52994442/1">USA TODAY</a>.</p>
				</div><!-- copy-left -->
				<div class="video">
					<a href="http://www.usatoday.com/news/health/wellness/marriage/story/2012-02-06/Date-night-can-improve-marriage-sexual-satisfaction/52994442/1"><img src="<?=$site_url?>images/usa-today4.jpg" alt="USA TODAY IMAGE"/></a>
				</div><!-- video -->
			</div><!-- slide_02 -->
			
			<div class="slide_03">
				<div class="content">
					<h1>Learn to Fight Fair with the One You Love.</h1>
					<p style="font-size:14px;">“Fight Night,” is a FREE event designed to address relationship issues with a wildly funny and engaging twist...The speakers, married relationship therapists Drs. Les and Leslie Parrott, pretend to “Duke-it-out” while sharing how-to’s for healthy conflict resolution. The Parrotts have been guests on Oprah, The View, The Early Show, CNN and other nationally syndicated TV and radio programs.</p>
					<div>
						<p style="font-size:10px;">Date: Saturday, August 25th<br/>
							Time: 7-9:30 pm<br/>
							Location: City Bible Church 9200 NE Fremont Ave., Portland OR 97220</p>
						<p style="font-size:10px;"> <a href="http://fight-night.eventbrite.com" rel="shadowbox;width=970;height=<?=$modal_height?>">Register for FREE</a> and receive a gift!<br/>
							*No childcare will be provided<br/>
							*FREE Shuttle service every 5 minutes [Details coming soon]</p>
					</div>
				</div><!-- copy-left -->
				<div class="video">
					<a href="http://fight-night.eventbrite.com" rel="shadowbox;width=970;height=<?=$modal_height?>"><img src="<?=$site_url?>images/slide_03.png" alt="FIGHT NIGHT"/></a>
				</div><!-- video -->
			</div><!-- slide_03 -->
			
			<div class="slide_04">
				<div class="content">
					<h1>Couple Checkup</h1>
					<h4 style="margin-top:-5px;margin-bottom:15px;">by Prepare &amp; Enrich</h4>
					<p>The Couple Checkup is a highly respected and nationally recognized relationship assessment tool used by professional counselors and therapists. The checkup normally costs $29 per couple, but Date Night PDX invites you to take the checkup for FREE by clicking on the provided link and entering this code: <b><em>DATENT-CKUP-2TFFWA</em></b></p>
					<p style="font-size:12px;">The assessment takes approximately 20 minutes to complete and the feedback you receive is designed to be constructive and encouraging. Couple Checkup has helped thousands take their relationship to a greater level of satisfaction and fulfillment. Take the checkup!</p>
				</div><!-- copy-left -->
				<div class="video">
					<a href="https://www.couplecheckup.com/launch/go_nwfs.html" rel="shadowbox;width=750;height=<?=$modal_height?>"><img src="<?=$site_url?>images/slide_04.png" alt="TAKE THE COUPLES CHECKUP"/></a>
				</div><!-- video -->
			</div><!-- slide_04 -->
		
		</div><!-- items -->
	</div><!-- scrollable -->
	<a class="next browse right"></a>
	<div class="navi"></div>
	<div class="divider"></div>
	
	<div class="newsletter">
		<form id="signUpForm" action="http://datenightpdx.us5.list-manage.com/subscribe/post?u=ef7a1e615a3f8ca0fadd65bb0&amp;id=116092cd53" method="post" target="_blank">
			<div class="field">
				<input type="text" name="EMAIL" value="E-mail Address" class="clearText" />
			</div>
			<div class="button">
				<input type="image" src="<?=$site_url?>images/spacer.gif" name="btn" value="Search" onClick="javascript:clickevent(account, email, complete)" />
			</div>
			<div class="confirm">
				<label for="iCommit">By checking this box I am committing to take the Date Night Challenge</label>
				<input type="checkbox" name="agree" id="iCommit" value="Yes" />
			</div>
		</form>
        <div id="hLine"></div>
        <div id="flashMob">
<<<<<<< HEAD
            <a href="http://gloo.us/join/c0e4d3a80422"><img src="images/327x160.png" width="327px" height="160px"></a>
=======
            <h2><span id="beGray">THE</span> <span id='beBlue'>DATE</span> <span id="beWhite">NIGHT</span> <span id="beGray">APP</span></h2>
            <p id="tag">Is now available for your mobile device!</p>
            <a href="http://itunes.apple.com/us/app/date-night-pdx/id547276386?ls=1&mt=8" id="iTunes" target="_blank">iTunes</a><a href="https://play.google.com/store/apps/details?id=com.gloo.dnc.pdx&feature=more_from_developer#?t=W251bGwsMSwyLDEwMiwiY29tLmdsb28uZG5jLnBkeCJd" id="gMark" target="_blank">Google Marketplace</a>
>>>>>>> c19d68895db9dcc9dcb9840efa17c5047a8f09b2
        </div>
	</div>
	<div class="clear"></div>
</div>
<div class="socialDiv">
	<ul>
    	<li><a href="https://www.facebook.com/groups/371633999558621/" target="_blank">facebook</a></li>
        <li><a href="http://twitter.com/datenightpdx" target="_blank">twitter</a></li>
    </ul>
</div>
<ul id="footerMenu">
	<li>Copyright Date Night PDX. All Rights Reserved.</li>
	<li><a href="<?=$site_url?>modal.php?p=contact" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Contact</a></li>
	<li><a href="<?=$site_url?>modal.php?p=about" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">About</a></li>
	<li><a href="<?=$site_url?>TERMSOFSERVICEDateNightPDX.doc.pdf" rel="shadowbox;width=<?=$modal_width?>;height=<?=$modal_height?>">Legal</a></li>
</ul>

<div class="social">
<div style="display:block; margin-top:-1px;float:left;" class="fb-like" data-href="https://www.datenightpdx.org" data-send="false" data-layout="button_count" data-width="100" data-show-faces="true"></div>
    <div style="display:block; margin-top:-1px;float:left;"><a href="https://twitter.com/datenightpdx" class="twitter-follow-button" data-show-count="true" data-lang="en" data-show-screen-name="false">Follow @datenightpdx</a></div>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

</div>
	
	
</body>
</html>

