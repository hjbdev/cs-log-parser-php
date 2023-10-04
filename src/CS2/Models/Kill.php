<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class Kill extends Model
{
    public const PATTERN = '/"(?P<killerName>.+)[<](?P<killerId>\d+)[>][<](?P<killerSteamId>.*)[>][<](?P<killerTeam>CT|TERRORIST|Unassigned|Spectator)[>]" \[(?P<killerX>[\-]?[0-9]+) (?P<killerY>[\-]?[0-9]+) (?P<killerZ>[\-]?[0-9]+)\] killed "(?P<killedName>.+)[<](?P<killedId>\d+)[>][<](?P<killedSteamId>.*)[>][<](?P<killedTeam>CT|TERRORIST|Unassigned|Spectator)[>]" \[(?P<killedX>[\-]?[0-9]+) (?P<killedY>[\-]?[0-9]+) (?P<killedZ>[\-]?[0-9]+)\] with "(?P<weapon>[a-zA-Z0-9_]+)"(?P<headshot>.*)/';

    public string $type = 'Kill';

    public string $killerId;

    public string $killerName;

    public string $killerTeam;

    public string $killerSteamId;

    public int $killerX;

    public int $killerY;

    public int $killerZ;

    public string $killedId;

    public string $killedName;

    public string $killedTeam;

    public string $killedSteamId;

    public int $killedX;

    public int $killedY;

    public int $killedZ;

    public string $weapon;

    public string $headshot;
}
