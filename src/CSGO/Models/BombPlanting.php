<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class BombPlanting extends Model
{
    public string $type = 'BombPlanting';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;
}
