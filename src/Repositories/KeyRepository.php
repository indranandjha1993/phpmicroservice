<?php

namespace App\Repositories;

class KeyRepository
{
    private $store = [];

    public function get($key)
    {
        return $this->store[$key] ?? null;
    }

    public function set($key, $value)
    {
        $this->store[$key] = $value;
    }
}
