<?php

require_once __DIR__ . "/autoload.php";
use hifreelight\unionpay\UnionPay;

list($mode, $config) = include './config.php';
$unionPay = UnionPay::Direct($config, $mode);

$postdata = $_REQUEST;
$unionPay->onOpenNotify($postdata, function($notifydata) {
	echo 'SUCCESS';
	print_r($notifydata);
});
