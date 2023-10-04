<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class GotTheBomb extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<team>CT|TERRORIST|Unassigned|Spectator)[>]" triggered \"Got\_The\_Bomb\"/';

    public string $type = 'GotTheBomb';

    public string $userName;

    public string $userId;

    public string $steamId;

    public string $team;
}
