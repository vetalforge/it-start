<?php

namespace App\Models\IpSpamChecker;

use App\Models\IpSpamChecker\FileStorage;

class IpSpamChecker
{
    const DELAY = 20;

    /**
     * @var IStorage $storage
     */
    public $storage;

    public function __construct(IStorage $storage)
    {
        $this->storage = $storage;
    }

    /**
     * @return bool
     */
    public function checkIPSpam()
    {
        $ips = [];
        $allowed_sending = true;
        $currentIP = $_SERVER['REMOTE_ADDR'];

        $ips = json_decode($this->storage->read(), true);

        if ($ips) {
            foreach ($ips as $ip => $time) {
                // Expired
                if ($time + self::DELAY < time()) {
                    unset($ips[$ip]);
                } else {
                    if ($currentIP === $ip) {
                        $allowed_sending = false;
                    }
                }
            }
        }

        $ips[$currentIP] = time();

        $this->storage->write(json_encode($ips));

        return $allowed_sending;
    }
}
