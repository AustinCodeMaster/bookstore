<?php
require 'Supplementary_Pluggin_5/vendor/autoload.php';
require_once "C://Apache24/htdocs/bookstore/conf.php";

$directories = ["Forms", "Layouts", "Global"];

spl_autoload_register(function ($className) use ($directories) {
    foreach ($directories as $directory) {
        $filePath = __DIR__ . "/$directory/" . $className . '.php';
        if (file_exists($filePath)) {
            require_once $filePath;
            return;
        }
    }
});


$ObjSendMail = new sendMail();
$form = new forms();
$layout = new LayoutManager();