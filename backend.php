<?php

symlink('site/lib/vendor/symfony/data/web/sf', 'sf');
require_once(dirname(__FILE__).'/site/config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('backend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
