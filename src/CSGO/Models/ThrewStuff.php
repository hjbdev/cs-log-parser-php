<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class ThrewStuff extends Model
{
    public string $type = 'ThrewStuff';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $posX;

    public string $posY;

    public string $posZ;

    public string $stuff;
}
