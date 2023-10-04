<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class SwitchTeam extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>]" switched from team [<](?P<oldTeam>CT|TERRORIST|Unassigned|Spectator)[>] to [<](?P<newTeam>CT|TERRORIST|Unassigned|Spectator)[>]/';

    public string $type = 'SwitchTeam';

    public string $userId;

    public string $userName;

    public string $oldTeam;

    public string $steamId;

    public string $newTeam;
}
