<?
$meta_title = 'Date Night PDX';
$meta_robots_index = 'index';
$meta_robots_follow = 'follow';
$site_url = '/';

$page = isset($_GET['p']) ? $_GET['p'] : '';
?>
<!doctype html> 
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?=!empty($meta_title)?$meta_title:$site_name?></title>
<meta name="robots" content="<?=$meta_robots_index?>,<?=$meta_robots_follow?>" />
<link rel="stylesheet" href="<?=$site_url?>styles/modal.v2.css">
<script src="../js/ga_scripts.js" type="text/javascript" language="javascript"></script>
</head>
<body  onload="initialize()" onUnload="GUnload()" >

<div id="mainContainer">
<?
$file = 'content/' . basename($page) . '.html';
if( file_exists($file) )
{
	include($file);
}
else
{
	include('content/default.html');
}
?>
</div>
	
	
</body>
</html>