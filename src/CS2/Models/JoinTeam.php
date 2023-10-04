<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class JoinTeam extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" joined team "(?P<joinTeam>CT|TERRORIST|Unassigned|Spectator)"/';

    public string $type = 'JoinTeam';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $joinTeam;
}
