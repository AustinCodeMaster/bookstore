<?php
// Site Information

use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html;

$conf['site_name'] = 'The Good Bookstore';
$conf['site_url'] = 'http://localhost';
$conf['admin_email'] = 'joyjudy.koi@strathmore.edu';

// Database Configuration
$conf['db_type'] = 'pdo';
$conf['db_host'] = 'localhost';
$conf['db_user'] = 'root';
$conf['db_pass'] = '';
$conf['db_name'] = 'bookstore_db';

// Site Language
$conf['site_lang'] = 'en';

//Email Configuration
$conf['mail_type'] = 'smtp'; //Option smtp or mail
$conf['smtp_host'] = 'smtp.gmail.com';
$conf['smtp_user'] = 'joyjudy.koi@strathmore.edu';
$conf['smtp_pass'] = '';
$conf['smtp_port'] = 465;
$conf['smtp_secure'] = 'ssl';

$mailCnt = [
    'name_from' => 'Benir Omenda',
    'email_from' => 'joyjudy.koi@strathmore.edu',
    // 'name_to' => 'Nir Odeny',
    // 'email_to' => '',: This has been reconfigured.
    'subject' => 'Connection Verified.',
    'body' => 'This is to test for successful database connectivity'
];

$conn = new mysqli($conf['db_host'], $conf['db_user'], $conf['db_pass'], $conf['db_name']);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Hello World";
}
