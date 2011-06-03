<script type="text/javascript">
	HeaderMenu.setActiveItem("mainMenu_CincinnatiBengals");
</script>

<div id="LeftBar">
<div class="breadcrumb" style="float:left; margin-left:10px;  margin-bottom:20px;">
	<a href="/">Home</a>
	&nbsp;&gt;&nbsp;
	Cincinnati Bengals
</div>

	<!-- <div style="clear:both; background:url('/media/structure/uf_header.jpg') no-repeat; width:600px; height:102px; margin-left:5px; border:1px solid #000;"></div> -->

	<div style="clear:both;"><p><?=$this->pagination->create_links();?></p></div>

	<div style="clear:both; ">
		<? foreach($rss as $x) { ?>
			
			<div style="margin:10px;">
			<div><a href="<?=$x["link"];?>" target="_blank"><?=$x["title"];?></a></div>
			<div style="font-size:10px; font-weight:bold;"><?=$x["pubDate"];?></div>
			<div style="font-size:12px;"><?=htmlspecialchars_decode($x["description"]);?></div>
			</div>
			
		<? } ?>
	</div>

</div>

<div id="Sidebar">
	<?= $sidebar ?>
</div>
