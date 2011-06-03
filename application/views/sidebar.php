<div style="margin-left:auto; margin-right:auto; margin-top:10px; border:1px solid #000; width:300px; height:400px;">
		<object width="300" height="400"><param name="movie" value="http://grooveshark.com/widget.swf" /><param name="wmode" value="window" /><param name="allowScriptAccess" value="always" />
<param name="flashvars" value="hostname=cowbell.grooveshark.com&playlistID=50110152&bbg=0000ff&bth=0000ff&pfg=0000ff&lfg=0000ff&bt=FFFFFF&pbg=FFFFFF&pfgh=FFFFFF&si=FFFFFF&lbg=FFFFFF&lfgh=FFFFFF&sb=FFFFFF&bfg=ff9900&pbgh=ff9900&lbgh=ff9900&sbh=ff9900&p=0" />
<embed src="http://grooveshark.com/widget.swf" type="application/x-shockwave-flash" width="300" height="400"
flashvars="hostname=cowbell.grooveshark.com&playlistID=50110152&bbg=0000ff&bth=0000ff&pfg=0000ff&lfg=0000ff&bt=FFFFFF&pbg=FFFFFF&pfgh=FFFFFF&si=FFFFFF&lbg=FFFFFF&lfgh=FFFFFF&sb=FFFFFF&bfg=ff9900&pbgh=ff9900&lbgh=ff9900&sbh=ff9900&p=0" allowScriptAccess="always" wmode="window" /></object>
	</div>
	<div style="margin-left:auto; margin-right:auto; margin-top:20px; border:1px solid #000; width:300px; height:250px;">
		<a href="http://click.linksynergy.com/fs-bin/click?id=U8lA2opZT2g&offerid=146261.10005774&type=4&subid=0"><IMG alt="" border="0" src="http://images.apple.com/itunesaffiliates/US/generic/GreyTopSongs_300x250.jpg"></a><IMG border="0" width="1" height="1" src="http://ad.linksynergy.com/fs-bin/show?id=U8lA2opZT2g&bids=146261.10005774&type=4&subid=0">			
	</div>

	<div class="row" id="photos_container" style="margin-top:20px; margin-bottom:20px; margin-left:3px;">
		<div id="photos_container" style="padding--bottom:20px;">
		<div id="photos_header"><div style="margin-top:7px; text-align:left; margin-left:10px; color:#000; font-size:18px;">Photos</div></div>
		<div id="photos_block">
				<? $count = 0; ?>
				<div style="margin-left:14px;">
				<? foreach($album_list as $x) { ?>
				<? if($count < 4) { ?>
					<div style="float:left; width:75px; margin-left:40px; margin-top:15px;">
						<a href="/photos/view/<?=$x['album_id'];?>/<?=$x['title'];?>/">
							<img src="<?=$x['gallery_image'];?>" height="75" width="75" border="0" style="border:1px solid #000;"/>
						</a>
						
							<div class="photo_main_text">
								<a href="/photos/view/<?=$x['album_id'];?>/<?=$x['title'];?>/">
									<?=$x['title'];?> (<?=$x['num_of_photos'];?>)
								</a>
							</div>
					</div>
					<? $count++; }?>
					
				<? } ?>
				</div>
				<div class="row reflowFiller"></div>
				<div id="photos_footer"><a href="/photos">View more photos...</a></div>
		</div>
		</div>
	</div>

	<div class="row"></div>
	
	<div style="margin-left:auto; margin-right:auto; margin-top:20px; width:300px;">
		<div id="socialnetwork" style="margin-bottom:-3px;">
			<div id="social_banner"><div style="margin-top:7px; text-align:left; margin-left:10px; color:#000; font-size:18px;">Social Networking</div></div>
			<div class="row" style=" width:300px; height:60px; background-color:#fff; border:1px solid #000; border-top:none;">
			<div style="padding-top:10px; margin-left:55px;">
			<a href="http://twitter.com/bmfelix" target="_blank"><img src="/media/structure/twitter.jpg" width="43" height="43" border="0"/></a>
			<a href="http://www.facebook.com/bradfelix" target="_blank"><img src="/media/structure/facebook.jpg" width="43" height="43" border="0" style="padding-left:20px;" /></a>
			<a href="http://www.myspace.com/bmfelix" target="_blank"><img src="/media/structure/myspace.jpg" width="43" height="43" border="0" style="padding-left:20px;" /></a>
			</div>
			</div>
		</div>
		<div id="feedback">
			<div style="float:left;">Have feedback?</div><div style="float:left; margin-left:5px;"><a href="/contact">Click Here</a></div>
		</div>
	</div>

	
	<div class="row reflowFiller">&nbsp;</div>