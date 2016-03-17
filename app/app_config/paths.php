<?php

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$base_url = 'http://' .$hostname. '/mvc.dev'. '/';

define('URL', $base_url);
