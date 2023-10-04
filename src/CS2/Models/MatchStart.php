<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class MatchStart extends Model
{
    public const PATTERN = '/World triggered "Match_Start" on "(?P<map>[a-z_0-9]*+)"/';

    public string $type = 'MatchStart';

    public string $map;
}
