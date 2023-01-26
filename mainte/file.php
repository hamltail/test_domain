<?php

$contactFile = '.contact.dat';

// ファイル丸ごと読み込み
$fileContents = file_get_contents($contactFile);
echo $fileContents;

// ファイル書き込み（上書き）
// file_put_contents($contactFile , '書き込みしました。');

// ファイル書き込み（上書き）
file_put_contents($contactFile , '書き込みしました。' . "\n", FILE_APPEND);
