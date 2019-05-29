<?php
require 'ContentStorage.php';
require 'TextEditor.php';

$editor = new TextEditor();

$editor->write('First.');
$editor->write('Second.');
$saved = $editor->save();
$editor->write('Third.');
$editor->restore($saved);

echo $editor->getContent().PHP_EOL;