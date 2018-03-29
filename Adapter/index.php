<?php
require 'vendor/autoload.php';

use Classes\socialSender;

use Classes\Facebook;
use Classes\Telegram;

// ... some code ...
// working with text data
$facebook = new socialSender(new Facebook());
$facebook->send('Posting to Facebook');

echo "\n";

// working with json data
$telegram = new socialSender(new Telegram());
$telegram->send('Posting to Telegram');