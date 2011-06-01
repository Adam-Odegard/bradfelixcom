<?
	$username = $forminfo["username"];
?>
<div id="authwrap">
<p>
<h1>Welcome <?=$username;?>!</h1>
</p>

<p>
<?	if(!$username){ 

		$attributes = array('class'=>'login','id'=>'loginform');
		echo form_open('/auth/verify',$attributes);
		
		echo form_label('your username','username');
		$edata = array('name' => 'username', 'id' => 'username', 'size' => '25','class'=>'form_input');
		echo form_input($edata);
		
		echo form_label('your password','password');
		$pdata = array('name' => 'password', 'id' => 'password', 'size' => '25','class'=>'form_input');
		echo form_password($pdata);
		
		$subData = array('name'=>'submit','value'=>'Submit!', 'class'=>'subButton');
		echo form_submit($subData);
		echo form_close();

	} else {
		$attributes = array('class'=>'logout','id'=>'logoutform');
		echo form_open('auth/logout',$attributes);
		$subData = array('name'=>'logout','value'=>'Logout!', 'class'=>'subButton');
		echo form_submit($subData);
		echo form_close();

	}
?>
</p>
</div>