<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class RoundRestart extends Model
{
    public const PATTERN = '!World triggered "Restart_Round_\((\d+)_(second|seconds)\)"!';

    public string $type = 'RoundRestart';
}
