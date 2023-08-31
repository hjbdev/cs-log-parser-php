<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class Connected extends Model
{
    public string $type = 'Connected';

    public string $userId;

    public string $userName;

    public string $steamId;

    public string $address;
}
