<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class SayTeam extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" say_team "(?P<text>.*)"/';

    public string $type = 'SayTeam';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $text;
}
