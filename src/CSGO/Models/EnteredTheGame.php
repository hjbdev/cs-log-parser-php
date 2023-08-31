<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class EnteredTheGame extends Model
{
    public string $type = 'EnteredTheGame';

    public string $userId;

    public string $userName;

    public string $steamId;
}
