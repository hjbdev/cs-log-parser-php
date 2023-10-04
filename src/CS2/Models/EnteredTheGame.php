<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class EnteredTheGame extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<][>]" entered the game/';

    public string $type = 'EnteredTheGame';

    public string $userId;

    public string $userName;

    public string $steamId;
}
