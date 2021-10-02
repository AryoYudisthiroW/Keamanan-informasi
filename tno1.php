<?php

$encrypt_method = 'aria-192-cbc';

$key = hash('sha256', 'tugas');

$iv = substr(hash('sha256', 'kunciaryo'), 0, 16);

$text = 'Tugas Keamanan Informasi';

//Encrypt
$encrypt = openssl_encrypt($text, $encrypt_method, $key, 0, $iv);

echo 'plaintext:'.$text;
echo '<br><br>';
echo 'key:'.$key;
echo '<br><br>';
echo 'iv:'.$iv;
echo '<br><br>';
echo 'hasil:'.$encrypt;

//Decrypt
$encrypted_text = $encrypt;
$decrypt = openssl_decrypt($encrypted_text, $encrypt_method, $key, 0, $iv);

echo '<br><br>';
echo '<br><br>';
echo 'chipertext:'.$encrypted_text;
echo '<br><br>';
echo 'key:'.$key;
echo '<br><br>';
echo 'iv:'.$iv;
echo '<br><br>';
echo 'hasil:'.$decrypt;

?>