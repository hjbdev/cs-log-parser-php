<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class SwitchTeam extends Model
{
    public string $type = 'SwitchTeam';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $newTeam;
}
