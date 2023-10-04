<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class KillAssist extends Model
{
    public const PATTERN = '/"(?P<assisterName>.+)[<](?P<assisterId>\d+)[>][<](?P<assisterSteamId>.*)[>][<](?P<assisterTeam>CT|TERRORIST|Unassigned|Spectator)[>]" assisted killing "(?P<killedName>.+)[<](?P<killedId>\d+)[>][<](?P<killedSteamId>.*)[>][<](?P<killedTeam>CT|TERRORIST|Unassigned|Spectator)[>]"/';

    public string $type = 'KillAssist';

    public string $assisterId;

    public string $assisterName;

    public string $assisterTeam;

    public string $assisterSteamId;

    public string $killedId;

    public string $killedName;

    public string $killedTeam;

    public string $killedSteamId;
}
