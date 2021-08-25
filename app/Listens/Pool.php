<?php

declare(strict_types=1);
/**
 * This file is part of Simps.
 *
 * @link     https://simps.io
 * @document https://doc.simps.io
 * @license  https://github.com/simple-swoole/simps/blob/master/LICENSE
 */
namespace App\Listens;

use Simps\DB\PDO;
use Simps\DB\Redis;
use Simps\Singleton;

class Pool
{
    use Singleton;

    public function workerStart($server, $workerId)
    {
        $config = config('database', []);
        if (! empty($config)) {
            PDO::getInstance($config);
        }

        $config = config('redis', []);
        if (! empty($config)) {
            Redis::getInstance($config);
        }

        // if (function_exists('opcache_reset')){
        //     // echo \Utils::localtime() ."[PID=" . posix_getpid() . "]\t". "#[$workerId]\t" . 'opcache_reset' . PHP_EOL;
        //     opcache_reset();
        // }

        // global $argv;
        // if($workerId >= $server->setting['worker_num']) {
        //     swoole_set_process_name("php simps: task_worker");
        //     //swoole_set_process_name("php {$argv[0]}: task_worker");
        //     //echo \Utils::localtime() ."[PID=" . posix_getpid() . "]\t". "#[$workerId]\t". "start worker: task" .PHP_EOL;
        // } else {
        //     swoole_set_process_name("php simps: worker");
        //     //swoole_set_process_name("php {$argv[0]}: worker");
        //     //echo \Utils::localtime() ."[PID=" . posix_getpid() . "]\t". "#[$workerId]\t" ."start worker".PHP_EOL;
        // }

        // include your code here
        // require_once __DIR__ . '/../../handler.php';
    }
}
