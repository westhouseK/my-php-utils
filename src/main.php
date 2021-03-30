<?php

// 実行お試し用のファイル
define('Root', realpath('../src') . '/');

require_once Root . 'Autoloader.php';

use Functions\ArrayFunc;

// HACk: オートローダが微妙！再帰的に読みに行くように実装したい
$autoloader = new Autoloader(Root);
$autoloader->load();

$func = new ArrayFunc();