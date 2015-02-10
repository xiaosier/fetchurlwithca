<?php
include "Snoopy.class.php";

$snoopy = new Snoopy;
$snoopy->local_cert = 'client_cert.pem';
$snoopy->passphrase = 'client_key_pass';

$snoopy->fetch("https://xxxx.xxx.com/xxx");
print $snoopy->results;