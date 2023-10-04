<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class BombDefusing extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" triggered "(Begin_Bomb_Defuse_With_Kit|Begin_Bomb_Defuse_Without_Kit)"/';

    public string $type = 'BombDefusing';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;
}
