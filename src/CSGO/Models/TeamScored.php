<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class TeamScored extends Model
{
    public string $type = 'TeamScored';

    public string $team;

    public string $score;

    public $players;
}
