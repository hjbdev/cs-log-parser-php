<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class Attack extends Model
{
    public const PATTERN = '/"(?P<attackerName>.*)[<](?P<attackerId>\d+)[>][<](?P<attackerSteamId>.*)[>][<](?P<attackerTeam>CT|TERRORIST|Unassigned|Spectator)[>]" \[(?P<attackerX>[\-]?[0-9]+) (?P<attackerY>[\-]?[0-9]+) (?P<attackerZ>[\-]?[0-9]+)\] attacked "(?P<victimName>.*)[<](?P<victimId>\d+)[>][<](?P<victimSteamId>.*)[>][<](?P<victimTeam>CT|TERRORIST|Unassigned|Spectator)[>]" \[(?P<victimX>[\-]?[0-9]+) (?P<victimY>[\-]?[0-9]+) (?P<victimZ>[\-]?[0-9]+)\] with "(?P<attackerWeapon>[a-zA-Z0-9_]+)" \(damage "(?P<attackerDamage>[0-9]+)"\) \(damage_armor "(?P<attackerDamageArmor>[0-9]+)"\) \(health "(?P<victimHealth>[0-9]+)"\) \(armor "(?P<victimArmor>[0-9]+)"\) \(hitgroup "(?P<victimHitGroup>.*)"\)/';

    public string $type = 'Attack';

    public string $attackerName;

    public string $attackerId;

    public string $attackerSteamId;

    public string $attackerTeam;

    public int $attackerX;

    public int $attackerY;

    public int $attackerZ;

    public string $attackerWeapon;

    public int $attackerDamage;

    public int $attackerDamageArmor;

    public string $victimHitGroup;

    public string $victimName;

    public string $victimId;

    public string $victimSteamId;

    public string $victimTeam;

    public int $victimX;

    public int $victimY;

    public int $victimZ;

    public int $victimHealth;

    public int $victimArmor;
}
