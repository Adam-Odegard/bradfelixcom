<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?=$title;?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="A website for all things related to Brad Felix" />
	<meta name="keywords" content="brad felix, krista felix, florida gators, scoreboards, facebook, halo" />
   <?= $_scripts ?>
   <?= $_styles ?>
</head>
<body>
	<div id="wrap">
		<div id="sitehead">
			<?= $header ?>
		</div>
		<div id="navigation">
			<?= $nav ?>
		</div>
		<div id="content_area">
			<?= $content ?>
		</div>
		
		<div style="float:left; clear:both; width:940px;">
			<div id="leaderboard_container">
				<a href="http://click.linksynergy.com/fs-bin/click?id=U8lA2opZT2g&offerid=146261.10005769&type=4&subid=0"><IMG alt="" border="0" src="http://images.apple.com/itunesaffiliates/US/generic/GreyPAIDApp_468x60.jpg" style="border: 1px solid #000;"></a><IMG border="0" width="1" height="1" src="http://ad.linksynergy.com/fs-bin/show?id=U8lA2opZT2g&bids=146261.10005769&type=4&subid=0">
			</div>
		</div>
	
			<div id="footer" style="float:left; clear:both;">
			<?= $footer ?>
			</div>
		</div>
		
		
	<div id="benchmarking" style="margin:20px; float:left; clear:both;">
	<?php echo "The page load time is " . $this->benchmark->elapsed_time() . " seconds"; ?> <br />
	<?php echo "Memory consumption is " . $this->benchmark->memory_usage();?>
	</div>
</body>
</html>