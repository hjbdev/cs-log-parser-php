<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class TeamScored extends Model
{
    public const PATTERN = '/Team "(?P<team>CT|TERRORIST)" scored "(?P<score>\d+)" with "(?P<players>\d+)" players/';

    public string $type = 'TeamScored';

    public string $team;

    public int $score;

    public int $players;
}
