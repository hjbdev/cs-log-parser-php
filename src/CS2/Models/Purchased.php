<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class Purchased extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" purchased "(?P<object>.*)"/';

    public string $type = 'Purchased';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $object;
}
