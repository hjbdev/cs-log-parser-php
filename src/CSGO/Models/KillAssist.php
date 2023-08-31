<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class KillAssist extends Model
{
    public string $type = 'KillAssist';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $killedUserId;

    public string $killedUserName;

    public string $killedUserTeam;

    public string $killedSteamId;
}
