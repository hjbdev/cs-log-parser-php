<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class SayTeam extends Model
{
    public string $type = 'SayTeam';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $text;
}
