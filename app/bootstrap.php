<?php

ini_set('display_errors', 1);
date_default_timezone_set('Europe/London');
switch (true) {
    case (file_exists(__DIR__ . '/../vendor/autoload.php')):
        // Installed standalone
        require __DIR__ . '/../vendor/autoload.php';
        break;
    case (file_exists(__DIR__ . '/../../../autoload.php')):
        // Installed as a Composer dependency
        require __DIR__ . '/../../../autoload.php';
        break;
    case (file_exists('vendor/autoload.php')):
        // As a Composer dependency, relative to CWD
        require 'vendor/autoload.php';
        break;
    default:
        throw new RuntimeException('Unable to locate Composer autoloader; please run "composer install".');
}

use PhpSchool\phpGenerators\Exercise\Range;
use PhpSchool\PhpWorkshop\Application;

$app = new Application('PHP Generators', __DIR__ . '/config.php');

//$app->addExercise(...);
//$app->addExercise(...);

$art = <<<ART
 __   __  ___   _______  ___      ______  
|  | |  ||   | |       ||   |    |      | 
|  |_|  ||   | |    ___||   |    |  _    |
|       ||   | |   |___ |   |    | | |   |
|_     _||   | |    ___||   |___ | |_|   |
  |   |  |   | |   |___ |       ||       |
  |___|  |___| |_______||_______||______| 
    
            shaun@phpminds.org
        
        
                PHP SCHOOL
            Learning PHP Generators
ART;

$app->setLogo($art);
$app->setFgColour('green');
$app->setBgColour('black');

$app->addExercise(Range::class);

return $app;
