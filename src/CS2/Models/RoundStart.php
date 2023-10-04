<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class RoundStart extends Model
{
    public const PATTERN = '/World triggered "Round_Start"/';

    public string $type = 'RoundStart';

    public int $time;

    public function __construct($data = [])
    {
        parent::__construct($data);
        $this->time = time();
    }
}
