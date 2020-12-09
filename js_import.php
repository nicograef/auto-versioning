<?php

const JS = array(
	'/auto-vers/js/app.js',
	'/auto-vers/js/component.js',
);

foreach (JS as $js)	
	echo '<script src="' . auto_version($js) . '" type="text/javascript"></script>';