<script type="text/javascript">
	HeaderMenu.setActiveItem("mainMenu_Contact");
</script>
<div id="LeftBar">
<div class="breadcrumb" style="float:left; margin-left:10px;  margin-bottom:20px;">
	<a href="/">Home</a>
	&nbsp;&gt;&nbsp;
	Contact
</div>
	<div id="authwrap">
	<p>
		Contact me by filling out the form below and clicking submit!  I look forward to hearing from you!
	</p>
	<p>
	<?
			$attributes = array('class'=>'login','id'=>'loginform');
			echo form_open('/contact/submit',$attributes);
			
			echo form_label('Name','name');
			$edata = array('name' => 'name', 'id' => 'name', 'size' => '25','class'=>'form_input');
			echo form_input($edata);
			
			echo form_label('Email','email');
			$edata = array('name' => 'email', 'id' => 'email', 'size' => '25','class'=>'form_input');
			echo form_input($edata);
			
			echo form_label('Comments','comments');
			$edata = array('name' => 'comments', 'id' => 'comments', 'cols' => '50', 'rows'=>'10','class'=>'form_input');
			echo form_textarea($edata);
			
			$subData = array('name'=>'submit','content'=>'Submit!','id'=>'subButton', 'class'=>'subButton');
			echo form_button($subData);
			echo form_close();
	
	?>
	</p>
	<p>
		<div id="result"></div>
	</p>
	</div>
</div>
<div id="Sidebar">
		<?= $sidebar ?>
</div>