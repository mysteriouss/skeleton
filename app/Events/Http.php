<?php

declare(strict_types=1);
/**
 * This file is part of Simps.
 *
 * @link     https://simps.io
 * @document https://doc.simps.io
 * @license  https://github.com/simple-swoole/simps/blob/master/LICENSE
 */
namespace App\Events;

use Swoole\Http\Server;

class Http
{
    public static function onTask($server,$task){
        $data = $task->data;
        echo 'server on task, data: ' . $data . PHP_EOL;
    }
}