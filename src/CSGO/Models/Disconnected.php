<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class Disconnected extends Model
{
    public string $type = 'Disconnected';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $reason;
}
