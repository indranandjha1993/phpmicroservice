<?php

namespace App\Services;

use App\Repositories\KeyRepository;

class KeyService
{
    private $repo;

    public function __construct(KeyRepository $repo)
    {
        $this->repo = $repo;
    }

    public function get($key)
    {
        return $this->repo->get($key);
    }

    public function set($key, $value)
    {
        $this->repo->set($key, $value);
    }
}
