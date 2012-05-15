<?php
	$msg = isset($_GET['u']) ? $_GET['u'] : 'http://joelcogen.com/qr';
	require_once('qrcode.class.php');

	require_once('urly.inc.php');
    $urly = urly($msg);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Joel Cogen | QR Code Generator</title>
		<meta name="Description" content="QR Code Generator with short URLs from ur.ly" />
		<meta name="Keywords" content="qr, code, qrcode, barcode, joel, cogen, joelcogen" />
	</head>
	<style type="text/css">
	body{font-family:Verdana; font-size:12px; color:#333; background:#f8f8f8}
	a{color:#b00; font-weight:bold; text-decoration:none}
	</style>
	<body>
		<center>
		    <h1>QR Code Generator</h1><br />
			<form method="GET" action="">
				<input name="u" value="<?=$msg?>" size="50" />
				<input type="submit" value="Generate" />
			</form>
			<br /><br /><hr width="450" /><br /><br />
			<img src="img.php?u=<?=urlencode($msg)?>" alt="qr-code" width="150" height="150" />
			<br /><br />
			<a href="img.php?u=<?=urlencode($msg)?>">Image link</a>
			<br /><br />
			Shorten URL: <a href="<?=$urly?>"><?=$urly?></a>
			<br /><br />
            Add it to your website:<br/>
			<textarea cols="50" rows="3">&lt;img src="http://joelcogen.com/qr/img.php?u=<?=urlencode($msg)?>" alt="qr-code" /&gt;</textarea>
		</center>
	</body>
</html>

