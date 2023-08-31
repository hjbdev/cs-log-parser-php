<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class Say extends Model
{
    public string $type = 'Say';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $text;
}
