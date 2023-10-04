<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class Say extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" say "(?P<text>.*)"/';

    public string $type = 'Say';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $text;
}
