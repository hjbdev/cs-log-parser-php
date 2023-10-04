<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class Disconnected extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" disconnected \(reason "(?P<reason>[A-Z_]*)"\)/';

    public string $type = 'Disconnected';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $reason;
}
