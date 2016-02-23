<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// load all files w/out autoloader
require_once 'Education/Command/AbstractCommand.php';
require_once 'Education/CommandManager.php';
require_once 'Education/Exception/EducationException.php';
require_once 'Education/Exception/CommandManagerException.php';
require_once 'Education/Exception/IllegalCommandException.php';
require_once 'Education/RequestHelper.php';

use Education\CommandManager;
use Education\RequestHelper;
use Education\Exception\EducationException;
use Education\Exception\CommandManagerException;
use Education\Exception\IllegalCommandException;

try {
    $helper = new RequestHelper(array('cmd'=>'ping'));
    $helper->runCommand();
} catch (\Exception $e) {
    print $e->getMessage();
    exit();
}
