<?php

require_once __DIR__ . "/../autoload.php";
use hifreelight\unionpay\UnionPay;

list($mode, $config) = include '../config.php';
$unionPay = UnionPay::B2C($config, $mode);

$payOrderNo = date('YmdHis');
$amt = 1;
$desc = 'desc';

$html = $unionPay->preAuth($payOrderNo, $amt, $desc);
echo $html;
