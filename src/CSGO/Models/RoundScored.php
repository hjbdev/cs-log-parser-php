<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class RoundScored extends Model
{
    public const TARGET_BOMBED = 'target_bombed';

    public const NORMAL = 'normal';

    public const SAVED = 'saved';

    public const BOMB_DEFUSED = 'bomb_defused';

    public string $type = 'RoundScored';

    public string $teamWin;

    public string $team;

    public string $winType;

    public function __construct($data = [])
    {
        parent::__construct($data);

        switch ($this->teamWin) {
            case 'Target_Bombed':
                $this->winType = self::TARGET_BOMBED;
                $this->teamWin = 'T';
                break;
            case 'Terrorists_Win':
                $this->winType = self::NORMAL;
                $this->teamWin = 'T';
                break;
            case 'Target_Saved':
                $this->winType = self::SAVED;
                $this->teamWin = 'CT';
                break;
            case 'Bomb_Defused':
                $this->winType = self::BOMB_DEFUSED;
                $this->teamWin = 'CT';
            case 'CTs_Win':
                $this->winType = self::NORMAL;
                $this->teamWin = 'CT';
                break;
        }
    }
}
