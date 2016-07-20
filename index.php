<?php

require_once 'vendor/autoload.php';

if (class_exists('PHPMailer')) {
    $mailer = new PHPMailer();
} else {
    echo "PHPMailer is not included." . "\n";
}

