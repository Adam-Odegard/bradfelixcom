<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <title><?=$title;?></title>
   <?= $_scripts ?>
   <?= $_styles ?>
</head>
<body>
   <div id="wrapper">
     <div id="header">
     	<h2><?= $title ?></h2>
        <?= $header ?>
     </div>
     <div id="main">
        <div id="content">
           <div class="post">
              <?= $content ?>
           </div>
        </div>
     </div>
     <div id="footer">
        <?= $footer ?>
     </div>
  </div>
<div id="benchmarking" style="margin:20px; float:left; clear:both;">
<?php echo "The page load time is " . $this->benchmark->elapsed_time() . " seconds"; ?> <br />
<?php echo "Memory consumption is " . $this->benchmark->memory_usage();?>
</div>
</body>
</html>