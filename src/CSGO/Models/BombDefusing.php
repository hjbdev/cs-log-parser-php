<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class BombDefusing extends Model
{
    public string $type = 'BombDefusing';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;
}
