<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
  	<div class="header-menu">
			<a href="<?php echo url_for('post/index') ?>" >Home</a>
			<a href="<?php echo url_for('post/music') ?>" >Music</a>
			<a href="<?php echo url_for('post/code') ?>" >Code</a>
			<a href="http://github.com/juanma-aguero" >git</a>
		</div>
		<div style="width:700px; height: 20px; margin: auto;">
			<a href="http://twitter.com/aguerojm" style="float: right;">
				<img src="/images/twitter-follow-me.jpg"/>
			</a>
		</div>
  	<div class="content">
    <?php echo $sf_content ?>
    </div>
  </body>
</html>
