<?php

namespace App\Models\IpSpamChecker;

class RedisStorage implements IStorage
{
    /**
     * @var \Redis $redis
     */
    private $redis;

    /**
     * @var string $redis
     */
    private $key;

    public function __construct($redis, $key)
    {
        $this->redis = $redis;
        $this->key = $key;
        $host = env('REDIS_HOST');
        $port = env('REDIS_PORT');

        $this->redis->connect($host, $port);
    }

    /**
     * @return string
     */
    public function read()
    {
        $data = $this->redis->get($this->key);
        return $data? $data : '';
    }

    /**
     * @param string $data
     */
    public function write($data)
    {
        $this->redis->set($this->key, $data);
    }
}
