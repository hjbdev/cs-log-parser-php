<?php

namespace CSLog\CS2;

use CSLog\CS2\Models\Attack;
use CSLog\CS2\Models\Blinded;
use CSLog\CS2\Models\BombDefusing;
use CSLog\CS2\Models\BombPlanting;
use CSLog\CS2\Models\ChangeMap;
use CSLog\CS2\Models\ChangeName;
use CSLog\CS2\Models\Connected;
use CSLog\CS2\Models\Disconnected;
use CSLog\CS2\Models\EnteredTheGame;
use CSLog\CS2\Models\GotTheBomb;
use CSLog\CS2\Models\JoinTeam;
use CSLog\CS2\Models\Kill;
use CSLog\CS2\Models\KillAssist;
use CSLog\CS2\Models\MatchEnd;
use CSLog\CS2\Models\MatchStart;
use CSLog\CS2\Models\MatchStatus;
use CSLog\CS2\Models\Purchased;
use CSLog\CS2\Models\RoundEnd;
use CSLog\CS2\Models\RoundRestart;
use CSLog\CS2\Models\RoundScored;
use CSLog\CS2\Models\RoundStart;
use CSLog\CS2\Models\Say;
use CSLog\CS2\Models\SayTeam;
use CSLog\CS2\Models\SwitchTeam;
use CSLog\CS2\Models\TeamScored;
use CSLog\CS2\Models\Threw;
use CSLog\Model;

class Patterns
{
    protected array $patterns = [
        'Attack' => Attack::PATTERN,
        'Blinded' => Blinded::PATTERN,
        'BombDefusing' => BombDefusing::PATTERN,
        'BombPlanting' => BombPlanting::PATTERN,
        'ChangeMap' => ChangeMap::PATTERN,
        'ChangeName' => ChangeName::PATTERN,
        'Connected' => Connected::PATTERN,
        'Disconnected' => Disconnected::PATTERN,
        'EnteredTheGame' => EnteredTheGame::PATTERN,
        'GotTheBomb' => GotTheBomb::PATTERN,
        'JoinTeam' => JoinTeam::PATTERN,
        'Kill' => Kill::PATTERN,
        'KillAssist' => KillAssist::PATTERN,
        'MatchEnd' => MatchEnd::PATTERN,
        'MatchStart' => MatchStart::PATTERN,
        'MatchStatus' => MatchStatus::PATTERN,
        'Purchased' => Purchased::PATTERN,
        'RoundEnd' => RoundEnd::PATTERN,
        'RoundRestart' => RoundRestart::PATTERN,
        'RoundScored' => RoundScored::PATTERN,
        'RoundStart' => RoundStart::PATTERN,
        'Say' => Say::PATTERN,
        'SayTeam' => SayTeam::PATTERN,
        'SwitchTeam' => SwitchTeam::PATTERN,
        'TeamScored' => TeamScored::PATTERN,
        'Threw' => Threw::PATTERN,
    ];

    public static function match($log): Model|false
    {
        foreach (static::all() as $type => $regex) {
            $matches = [];
            if (preg_match($regex, $log, $matches)) {
                $class = 'CSLog\\CS2\\Models\\' . $type;

                if (class_exists($class)) {
                    return new $class($matches);
                }
            }
        }

        return false;
    }

    public static function all(): array
    {
        $obj = new static();

        return $obj->patterns;
    }

    public static function __callStatic($name, $arguments): ?string
    {
        $obj = new static();

        return $obj->patterns[$name] ?? null;
    }
}
