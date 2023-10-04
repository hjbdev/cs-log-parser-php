<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class RoundEnd extends Model
{
    public const PATTERN = '/World triggered "Round_End"/';

    public string $type = 'RoundEnd';
}
