<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
	  <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
	  <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
  	<div class="header-menu">
			<a href="<?php echo url_for('post/index') ?>" >Inicio</a>
			<a href="<?php echo url_for('post/music') ?>" >Musica</a>
			<a href="<?php echo url_for('post/code') ?>" >Cosas</a>
			<a href="http://github.com/juanma-aguero" >Github</a>
			<br/>
			<a href="https://twitter.com/aguerojm" class="twitter-follow-button" data-button="grey" data-link-color="grey" data-text-color="000000" ></a>
		</div>
	  	<div class="content">
    <?php echo $sf_content ?>
    </div>
  </body>
</html>
