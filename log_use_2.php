<?php 
// ファイルの読み込み
require_once( __DIR__ . "/WebCAMP_Log.php");
//
use WEBCAMP\Log;

// 「名前空間付き」のクラスを使う（被修飾名）
$obj = new Log();
$obj->test();