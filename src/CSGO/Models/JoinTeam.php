<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class JoinTeam extends Model
{
    public string $type = 'JoinTeam';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $joinTeam;
}
