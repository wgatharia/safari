<?php
$files = glob(__DIR__ . '/../Entity/*.php');

foreach ($files as $file) {
    // prevents including file itself
    if ($file != __FILE__) {
        require($file);
    }
}


require __DIR__ . "/../Repository/Repository.php";

require __DIR__ . "/../../vendor/autoload.php";

