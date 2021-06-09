<?php

define("ROOT", dirname(__DIR__));

require ROOT."/Vendor/Autoload.php";

Vendor\Autoload::register();

// $id = isset($_GET['id']) ? $_GET['id'];

include ROOT."/Routeur/routeur.php";