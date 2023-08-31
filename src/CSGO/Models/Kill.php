<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class Kill extends Model
{
    public string $type = 'Kill';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $killerX;

    public string $killerY;

    public string $killerZ;

    public string $killedUserId;

    public string $killedUserName;

    public string $killedUserTeam;

    public string $killedSteamId;

    public string $killedX;

    public string $killedY;

    public string $killedZ;

    public string $weapon;

    public string $headshot;
}
