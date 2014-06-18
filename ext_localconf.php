<?php

// Add additional stdWrap properties
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['stdWrap'][$_EXTKEY] =
	'EXT:parsedown/Classes/Hooks/StdWrap.php:&GeorgRinger\\Parsedown\\Hooks\\StdWrap';