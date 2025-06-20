<?php

namespace App\Models\IpSpamChecker;

class StorageFactory
{
    public static function make()
    {
        $storageType = env('SPAM_CHECKER_STORAGE', 'file');

        if ($storageType === 'redis') {
            $redis = new \Redis();
            $redis->connect(env('REDIS_HOST', '127.0.0.1'), env('REDIS_PORT', 6379));

            $password = env('REDIS_PASSWORD');
            if ($password) {
                $redis->auth($password);
            }

            return new RedisStorage($redis, 'locked_ips');
        }

        return new FileStorage(storage_path('locked_ips.txt'));
    }
}
