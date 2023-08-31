<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class ChangeName extends Model
{
    public string $type = 'ChangeName';

    public string $userId;

    public string $userName;

    public string $userTeam;

    public string $steamId;

    public string $newName;
}
