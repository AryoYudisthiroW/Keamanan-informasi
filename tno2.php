<?php

$config = array(

		'config'				=> 'F:\tugas\htdocs\crypto\openssl.cnf',
		
		'default_md'			=> 'sha1024',
		
		'private_key_bits'		=> '1024',
		
		'private_key_type'		=> 'OPENSSL_KEYTYPE_RSA',
);

// key Pair 
$keypair = openssl_pkey_new($config);

// Private Key 
openssl_pkey_export($keypair, $privKey, null, $config);

//Public Key 
$publickey = openssl_pkey_get_details($keypair);
$pubKey = $publickey['key'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta chaset="utf-8">
	<title></title>
<head>
<body>
	<textarea cols="100" rows="30"><?php echo $privKey?></textarea>
	<textarea cols="100" rows="30"><?php echo $pubKey ?></textarea>
</body>
</html>
	