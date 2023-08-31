<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class Purchased extends Model
{
    public string $type = 'Purchased';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $obj;
}
