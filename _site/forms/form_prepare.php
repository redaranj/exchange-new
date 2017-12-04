<?php
session_start();
if (function_exists('mcrypt_create_iv')) {
  $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
} else {
  $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
}

$token = $_SESSION['token'];
?>