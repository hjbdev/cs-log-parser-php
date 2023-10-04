<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class MatchEnd extends Model
{
    public const PATTERN = '/(Game Over: competitive) (?P<mapGroup>[a-z_0-9]*+) (?P<map>[a-z_0-9]*+) score (?P<scoreA>[0-9]{1,2}):(?P<scoreB>[0-9]{1,2}) after (?P<duration>[0-9]{1,4}) min/';

    public string $type = 'MatchEnd';

    public string $mapGroup;

    public string $map;

    public int $scoreA;

    public int $scoreB;

    public int $duration;
}
