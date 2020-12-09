<?php

const CSS = array(
	'/auto-vers/css/main.css',
	'/auto-vers/css/initiative.css',
);

foreach (CSS as $css)	
  echo '<link rel="stylesheet" href="' . auto_version($css) . '" type="text/css">';