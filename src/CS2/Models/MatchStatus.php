<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class MatchStatus extends Model
{
    public const PATTERN = '/MatchStatus: Score: (?P<scoreA>[0-9]{1,2}):(?P<scoreB>[0-9]{1,2}) on map "(?P<map>[a-z_0-9]*)" RoundsPlayed: (?P<roundsPlayed>[0-9]{1,2})/';

    public string $type = 'MatchStatus';

    public int $scoreA;

    public int $scoreB;

    public string $map;

    public int $roundsPlayed;
}
