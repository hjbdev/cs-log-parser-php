<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class Blinded extends Model 
{
    public const PATTERN = '/"(?P<victimName>.+)[<](?P<victimId>\d+)[>][<](?P<victimSteamId>.*)[>][<](?P<victimTeam>CT|TERRORIST|Unassigned|Spectator)[>]" blinded for (?<time>[0-9.]+) by "(?P<throwerName>.+)[<](?P<throwerUserId>\d+)[>][<](?P<throwerSteamId>.*)[>][<](?P<throwerTeam>CT|TERRORIST|Unassigned|Spectator)[>]" from flashbang entindex (?<entindex>[0-9]+)/';

    public string $type = 'Blinded';

    public string $victimId;

    public string $victimName;

    public string $victimTeam;

    public string $victimSteamId;

    public string $throwerUserId;

    public string $throwerName;

    public string $throwerTeam;

    public string $throwerSteamId;

    public float $time;

    public int $entindex;
}
