<?php
$identifier = Config::inst()->get('XHTMLEditorConfig','identifier');
$buttons = Config::inst()->get('XHTMLEditorConfig','buttons');
$options = Config::inst()->get('XHTMLEditorConfig','options');

$htmlConfig = HtmlEditorConfig::get($identifier)
	->setButtonsForLine(1, $buttons[1])
	->setButtonsForLine(2, $buttons[2])
	->setButtonsForLine(3, $buttons[3])
	->setOptions($options);
;
