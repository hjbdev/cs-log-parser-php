<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class BombPlanting extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" triggered "Planted_The_Bomb" at bombsite (?P<bombsite>A|B)/';
    
    public string $type = 'BombPlanting';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $bombsite;
}
