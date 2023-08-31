<?php

namespace CSLog\CSGO\Models;

use CSLog\Model;

class Attack extends Model
{
    public string $type = 'Attack';

    public string $attackerName;

    public string $attackerUserId;

    public string $attackerSteamId;

    public string $attackerTeam;

    public string $attackerPosX;

    public string $attackerPosY;

    public string $attackerPosZ;

    public string $attackerWeapon;

    public string $attackerDamage;

    public string $attackerDamageArmor;

    public string $attackerHitGroup;

    public string $victimName;

    public string $victimUserId;

    public string $victimSteamId;

    public string $victimTeam;

    public string $victimPosX;

    public string $victimPosY;

    public string $victimPosZ;

    public string $victimHealth;

    public string $victimArmor;
}
