<link rel="stylesheet" type="text/css" href="/css/lightbox.css" media="print, screen">
<script type="text/javascript">
	HeaderMenu.setActiveItem("mainMenu_Photos");
</script>

<div id="LeftBar">
	<div class="breadcrumb" style="float:left; margin-left:10px;  margin-bottom:20px;">
		<a href="/">Home</a>
		&nbsp;&gt;&nbsp;
		<a href="/photos">Photos</a>
		&nbsp;&gt;&nbsp;
		<?=$album_name;?>
	</div>
	
	
	<div class="photos_title">
		<span style="padding:5px;"><?=$album_name;?></span>
	</div>
	
	
	
	<div class="row" id="gallery_grid">
				
			<? foreach($album_info as $x){ ?>
			
				<div style="float:left; margin-left:10px; margin-top:10px;">
				<div class="Pic_Vid_container photo_main">
					<a href="<?=$x["image"];?>" rel="lightbox[pics]" height="75" width="75">
						<img src="<?=$x["image"];?>" height="75" width="75" border="0" style="border:1px solid #000;"/>
					</a>
				</div>
			
				<div class="row reflowFiller"><br/>&nbsp;<br/></div>
				</div>
			<? } ?>
		
	</div>
	<div class="row reflowFiller"></div>

</div>


<div id="Sidebar">
	<?= $sidebar ?>
</div>
