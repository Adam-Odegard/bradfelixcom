<script type="text/javascript">
	HeaderMenu.setActiveItem('mainMenu_Weather');
</script>
<div id="LeftBar">
<div class="breadcrumb" style="float:left; margin-left:10px;  margin-bottom:20px;">
	<a href="/">Home</a>
	&nbsp;&gt;&nbsp;
	Weather
</div>

	<div class="row">
	
		<div style="font-size:18px; color:#000; height:32px; width:600px; text-align:left; background:url('/media/structure/title_bar.jpg')repeat-x; border:1px solid #000; margin-left:10px;"><span style="margin-left:5px;">Current Conditions</span> <span style="font-size:12px;">(Powered By: The Weather Channel &#0174;)</span></div>
		
		<div id="weather_wrap">
		<? 
			foreach($current as $x){ 
			
			$condition_icon = $x["condition_icon"];
			$condition = $x["conditions"];
		?>
				<div id="weather_icon">
					<img src="/media/weather/weather_icons/<?=$x["condition_icon"];?>.png" id="cond"/> <br />
					<img style="margin-top:10px;" src="/media/weather/weather_icons/TWClogo.png" />
				</div>
				
				<div id="weather_info">
					<b><?=$x["city"];?></b> <br />
					Last Update: <?=$x["last_update"];?> <br />
					Sunrise: <?=$x["sunrise"];?> <br />
					Sunset: <?=$x["sunset"];?> <br />
					<b>Conditions: <?=$x["conditions"];?></b> <br />
					Temp: <?=$x["temp"]?>&#176; <br />
					Atmospheric Pressure (mB):<?=$x["mb_pressure"];?> - <?=$x["mb_pressure_status"];?><br />
					Wind: {wind_direction} at <?=$x["wind_sustain"];?> MPH<br />
					Humidity: <?=$x["humidity"];?>%<br />
					Visibility: <?=$x["visibility"];?> miles <br />
				</div>
			<div class="row reflowFiller">&nbsp;</div>
		<? } ?>
		
		<div id="links_wrap">
		<? foreach($links as $x){ ?>
			<div id="required_links">
				<a href="<?=$x["link_url"];?>" target="_blank"><?=$x["link_name"];?></a>
			</div>
		<? } ?>
		</div>
		<div class="row reflowFiller">&nbsp;</div>
		</div>	
		
		<div class="row reflowFiller">&nbsp;</div>
	</div>
	
	
	<div class="row">
	
		<div style="font-size:18px; color:#000; height:32px; width:600px; text-align:left; background:url('/media/structure/title_bar.jpg')repeat-x; border:1px solid #000; margin-left:10px;"><span style="margin-left:5px;">Five Day Forecast</span> <span style="font-size:12px;">(Powered By: The Weather Channel &#0174;)</span></div>
		
		
		<div id="weather_wrap">
		<div id="forecast_wrap"><div style="margin-left:-10px;">
		<? foreach($fiveday as $x){ ?>
				
					<div class="day_title">
						<b><?=$x["date"];?></b><br />
						<?
							if($x["day_icon"] == 44){
								$icon = $condition_icon;
							}else{
								$icon = $x["day_icon"];
							}
							
							if($x["day_description"] == "N/A"){
								$descript = $condition;
							}else{
								$descript = $x["day_description"];
							}
						?>
						<img src="/media/weather/weather_icons/<? echo $icon; ?>.png" /> <br />
						High: <?=$x["high"];?>&#176;<br />
						Low: <?=$x["low"];?>&#176;<br />
						Sunrise: <?=$x["sunrise"];?><br />
						Sunset:<?=$x["sunset"];?><br />
						<b><? echo $descript; ?></b><br />
						Precip: <?=$x["day_precip"];?>% <br />
					</div>
				
		<? } ?>
		</div>
		<div class="row reflowFiller">&nbsp;</div>
		</div>
		</div>	
			
		<div class="row reflowFiller">&nbsp;</div>
	</div>

</div>
	
<div id="Sidebar">
	<?= $sidebar ?>
</div>




