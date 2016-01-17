<?php
require_once 'Simple_Caesar_Class.php';

$caesar = new Simple_Caesar_Cipher;
$caesar->string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$caesar->shift = 6;

echo '<hr>Encoded string: ';

echo $caesar->encode();

echo '<hr>Decoded string: ';

echo $caesar->decode();
?>