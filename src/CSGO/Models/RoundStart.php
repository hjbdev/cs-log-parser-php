<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class RoundStart extends Model
{
    public string $type = 'RoundStart';

    public int $time;

    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->time = time();
    }
}
