<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class ChangeName extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" changed name to "(?P<newName>.*)"/';

    public string $type = 'ChangeName';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $newName;
}
