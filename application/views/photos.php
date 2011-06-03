<script type="text/javascript">
	HeaderMenu.setActiveItem("mainMenu_Photos");
</script>

<div id="LeftBar">
<div class="breadcrumb" style="float:left; margin-left:10px;  margin-bottom:20px;">
	<a href="/">Home</a>
	&nbsp;&gt;&nbsp;
	Photos
</div>

<div class="photos_title">
	<span style="padding:5px;">Photos</span>
</div>


<div class="row" id="gallery_grid">
			
				<? foreach($album_list as $x) { ?>
				
					<div style="float:left; margin-left:10px; margin-top:10px;">
					<div class="Pic_Vid_container photo_main">
						<a href="/photos/view/<?=$x['album_id'];?>/<?=$x['title'];?>/">
							<img src="<?=$x['gallery_image'];?>" height="140" width="190" border="0" style="border:1px solid #000;"/>
						</a>
						
							<div class="photo_main_text">
								<a href="/photos/view/<?=$x['album_id'];?>/<?=$x['title'];?>/">
									<?=$x['title'];?> (<?=$x['num_of_photos'];?>)
								</a>
							</div>
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
