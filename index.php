<?php

# Use an autoloader

# Require twig
require_once 'core/libs/third_party/vendor/autoload.php';

require 'core/Bootstrap.php';
require 'core/libs/Controller.php';
require 'core/libs/View.php';

require 'app/app_config/paths.php';

$app = new Bootstrap();
