<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 23/04/15
 * Time: 19:11
 */
require_once('UserLogin.php');
require_once('SenderMailUserLogin.php');

$user = new user\UserLogin();
$sender = new \user\SenderMailUserLogin();
$user->attach($sender);
$user->login();