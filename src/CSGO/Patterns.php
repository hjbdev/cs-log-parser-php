<?php

namespace CSLog\CSGO;

use CSLog\Model;

class Patterns
{
    protected $patterns = [
        'Attack' => '/"(?P<attackerName>.*)[<](?P<attackerUserId>\d+)[>][<](?P<attackerSteamId>.*)[>][<](?P<attackerTeam>CT|TERRORIST|Unassigned|Spectator)[>]" \[(?P<attackerPosX>[\-]?[0-9]+) (?P<attackerPosY>[\-]?[0-9]+) (?P<attackerPosZ>[\-]?[0-9]+)\] attacked "(?P<victimName>.*)[<](?P<victimUserId>\d+)[>][<](?P<victimSteamId>.*)[>][<](?P<victimTeam>CT|TERRORIST|Unassigned|Spectator)[>]" \[(?P<victimPosX>[\-]?[0-9]+) (?P<victimPosY>[\-]?[0-9]+) (?P<victimPosZ>[\-]?[0-9]+)\] with "(?P<attackerWeapon>[a-zA-Z0-9_]+)" \(damage "(?P<attackerDamage>[0-9]+)"\) \(damage_armor "(?P<attackerDamageArmor>[0-9]+)"\) \(health "(?P<victimHealth>[0-9]+)"\) \(armor "(?P<victimArmor>[0-9]+)"\) \(hitgroup "(?P<attackerHitGroup>.*)"\)/',
        'BombDefusing' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" triggered "(Begin_Bomb_Defuse_With_Kit|Begin_Bomb_Defuse_Without_Kit)"/',
        'BombPlanting' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" triggered "Planted_The_Bomb"/',
        'ChangeMap' => '/(Started map|Loading map) "(?P<maps>.*)"/',
        'ChangeName' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" changed name to "(?P<newName>.*)"/',
        'Connected' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<][>]" connected, address "(?P<address>.*)"/',
        'Disconnected' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" disconnected/',
        'EnteredTheGame' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<][>]" entered the game/',
        'GotTheBomb' => '/triggered \"Got\_The\_Bomb\"/',
        'JoinTeam' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" joined team "(?P<joinTeam>CT|TERRORIST|Unassigned|Spectator)"/',
        'Kill' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" \[(?P<killerX>[\-]?[0-9]+) (?P<killerY>[\-]?[0-9]+) (?P<killerZ>[\-]?[0-9]+)\] killed "(?P<killedUserName>.+)[<](?P<killedUserId>\d+)[>][<](?P<killedSteamId>.*)[>][<](?P<killedUserTeam>CT|TERRORIST|Unassigned|Spectator)[>]" \[(?P<killed_x>[\-]?[0-9]+) (?P<killed_y>[\-]?[0-9]+) (?P<killed_z>[\-]?[0-9]+)\] with "(?P<weapon>[a-zA-Z0-9_]+)"(?P<headshot>.*)/',
        'KillAssist' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" assisted killing "(?P<killedUserName>.+)[<](?P<killedUserId>\d+)[>][<](?P<killedSteamId>.*)[>][<](?P<killedUserTeam>CT|TERRORIST|Unassigned|Spectator)[>]"/',
        'Purchased' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" purchased "(?P<object>.*)"/',
        'RoundEnd' => '/World triggered "Round_End"/',
        'RoundRestart' => '!World triggered "Restart_Round_\((\d+)_(second|seconds)\)"!',
        'RoundScored' => '/Team "(?P<team>.*)" triggered "SFUI_Notice_(?P<team_win>Terrorists_Win|CTs_Win|Target_Bombed|Target_Saved|Bomb_Defused)/',
        'RoundStart' => '/World triggered "Round_Start"/',
        'Say' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" say "(?P<text>.*)"/',
        'SayTeam' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" say_team "(?P<text>.*)"/',
        'SwitchTeam' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>]" switched from team [<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>] to [<](?P<newTeam>CT|TERRORIST|Unassigned|Spectator)[>]/',
        'TeamScored' => '/Team "(?P<team>CT|TERRORIST)" scored "(?P<score>\d+)" with "(?P<players>\d+)" players/',
        'ThrewStuff' => '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<](?P<userTeam>CT|TERRORIST|Unassigned|Spectator)[>]" threw (?P<stuff>hegrenade|flashbang|smokegrenade|decoy|molotov) \[(?P<posX>[\-]?[0-9]+) (?P<posY>[\-]?[0-9]+) (?P<posZ>[\-]?[0-9]+)\]/',
        'MatchStart' => '/World triggered "Match_Start"/',
        'MatchEnd' => '/(Game Over: competitive)  (?P<map>[abcdefghijklmnopqrstuvwxyz_1234567890]* +)/',
    ];

    public static function match($log): Model|false
    {
        $log = preg_replace('/[0-1]?[0-9]?\/[0-3]?[0-9]?\/[0-9]?[0-9]?[0-9]?[0-9]? - [0-9]?[0-9]?:[0-9]?[0-9]?:[0-9]?[0-9]?.[0-9]?[0-9]?[0-9]? - /', '', $log);

        foreach (static::all() as $type => $regex) {
            if (preg_match($regex, $log, $matches = [])) {

                $class = 'CSLog\\CSGO\\Models\\'.$type;

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
