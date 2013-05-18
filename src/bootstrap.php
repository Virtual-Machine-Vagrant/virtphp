<?php

/*
 * This file is part of VirtPHP.
 *
 * (c) Jordan Kasper <github @jakerella>
 *     Ben Ramsey <github @ramsey>
 *     Jacques Woodcock <github @jwoodcock>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function includeIfExists($file)
{
    if (file_exists($file)) {
        return include $file;
    }
}

if ((!$loader = includeIfExists(__DIR__."/../vendor/autoload.php")) && (!$loader = includeIfExists(__DIR__."/../../../autoload.php"))) {
    echo "You must set up the project dependencies, run the following commands:".PHP_EOL.
         "curl -sS https://getcomposer.org/installer | php".PHP_EOL.
         "php composer.phar install".PHP_EOL;
    exit(1);
}

return $loader;
