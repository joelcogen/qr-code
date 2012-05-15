<?php
	$msg = isset($_GET['u']) ? $_GET['u'] : '';
	if (!$msg) $msg = "http://joelcogen.com/qrcode";

	require_once('qrcode.class.php');

	require_once('urly.inc.php');
    $urly = urly($msg);

	$qrcode = new QRcode(utf8_encode($urly), 'Q');
	$qrcode->disableBorder();
	$qrcode->displayPNG(150);

