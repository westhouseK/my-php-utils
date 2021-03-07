<?php

// 実行お試し用のファイル
define('Root', realpath('../src') . '/');

require_once Root . 'Autoloader.php';

// HACk: オートローダが微妙！再帰的に読みに行くように実装したい
$autoloader = new Autoloader(Root. 'Array/');
$autoloader->load();

$func = new ArrayFunc();