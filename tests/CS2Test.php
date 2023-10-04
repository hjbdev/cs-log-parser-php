<?php

use CSLog\CS2\Models\Attack;
use CSLog\CS2\Models\Blinded;
use CSLog\CS2\Models\BombDefusing;
use CSLog\CS2\Models\BombPlanting;
use CSLog\CS2\Models\Connected;
use CSLog\CS2\Models\Disconnected;
use CSLog\CS2\Models\EnteredTheGame;
use CSLog\CS2\Models\GotTheBomb;
use CSLog\CS2\Models\Kill;
use CSLog\CS2\Models\KillAssist;
use CSLog\CS2\Models\MatchEnd;
use CSLog\CS2\Models\MatchStart;
use CSLog\CS2\Models\MatchStatus;
use CSLog\CS2\Models\Purchased;
use CSLog\CS2\Models\RoundEnd;
use CSLog\CS2\Models\RoundScored;
use CSLog\CS2\Models\RoundStart;
use CSLog\CS2\Models\SwitchTeam;
use CSLog\CS2\Models\TeamScored;
use CSLog\CS2\Models\Threw;
use CSLog\CS2\Patterns;

test('Attack', function () {
    $log = 'L 10/01/2023 - 16:31:58: "GEO<0><[U:1:353168853]><CT>" [-884 537 -32] attacked "Elix<3><[U:1:302549372]><TERRORIST>" [-1035 564 -47] with "m4a1" (damage "90") (damage_armor "19") (health "10") (armor "81") (hitgroup "head")';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(Attack::class);
    expect($model->type)->toBe('Attack');
    expect($model->attackerName)->toBe("GEO");
    expect($model->attackerId)->toBe("0");
    expect($model->attackerSteamId)->toBe("[U:1:353168853]");
    expect($model->attackerTeam)->toBe("CT");
    expect($model->attackerX)->toBe(-884);
    expect($model->attackerY)->toBe(537);
    expect($model->attackerZ)->toBe(-32);
    expect($model->attackerWeapon)->toBe("m4a1");
    expect($model->attackerDamage)->toBe(90);
    expect($model->attackerDamageArmor)->toBe(19);
    expect($model->victimHitGroup)->toBe("head");
    expect($model->victimName)->toBe("Elix");
    expect($model->victimId)->toBe("3");
    expect($model->victimSteamId)->toBe("[U:1:302549372]");
    expect($model->victimTeam)->toBe("TERRORIST");
    expect($model->victimX)->toBe(-1035);
    expect($model->victimY)->toBe(564);
    expect($model->victimZ)->toBe(-47);
    expect($model->victimHealth)->toBe(10);
    expect($model->victimArmor)->toBe(81);
});

test('Blinded', function () {
    $log = 'L 10/01/2023 - 16:58:41: "Kaph<6><[U:1:149882025]><CT>" blinded for 1.01 by "Scriib<8><[U:1:94156635]><CT>" from flashbang entindex 568';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(Blinded::class);
    expect($model->type)->toBe('Blinded');

    expect($model->victimId)->toBe('6');
    expect($model->victimName)->toBe('Kaph');
    expect($model->victimTeam)->toBe('CT');
    expect($model->victimSteamId)->toBe('[U:1:149882025]');
    expect($model->time)->toBe(1.01);
    expect($model->throwerUserId)->toBe("8");
    expect($model->throwerName)->toBe("Scriib");
    expect($model->throwerTeam)->toBe("CT");
    expect($model->throwerSteamId)->toBe("[U:1:94156635]");
    expect($model->entindex)->toBe(568);
});

test('BombDefusing', function () {
    $log = 'L 10/01/2023 - 16:49:35: "index<4><[U:1:98202654]><CT>" triggered "Begin_Bomb_Defuse_Without_Kit"';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(BombDefusing::class);
    expect($model->userId)->toBe("4");
    expect($model->userName)->toBe("index");
    expect($model->userTeam)->toBe("CT");
    expect($model->steamId)->toBe("[U:1:98202654]");
});

test('BombPlanting', function () {
    $log = 'L 10/01/2023 - 16:53:03: "Kaph<6><[U:1:149882025]><TERRORIST>" triggered "Planted_The_Bomb" at bombsite B';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(BombPlanting::class);
    expect($model->userId)->toBe("6");
    expect($model->userName)->toBe("Kaph");
    expect($model->userTeam)->toBe("TERRORIST");
    expect($model->steamId)->toBe("[U:1:149882025]");
    expect($model->bombsite)->toBe("B");
});

test('ChangeMap', function () {
    // @todo
});

test('ChangeName', function () {
    // @todo
});

test('Connected', function () {
    $log = 'L 10/01/2023 - 16:32:46: "Scriib<8><[U:1:94156635]><>" connected, address "127.0.0.1:1234"';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(Connected::class);
    expect($model->type)->toBe('Connected');
    expect($model->userId)->toBe('8');
    expect($model->userName)->toBe('Scriib');
    expect($model->steamId)->toBe('[U:1:94156635]');
    expect($model->address)->toBe('127.0.0.1:1234');
});

test('Disconnected', function () {
    $log = 'L 10/01/2023 - 17:18:54: "Elix<3><[U:1:302549372]><TERRORIST>" disconnected (reason "NETWORK_DISCONNECT_DISCONNECT_BY_USER")';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(Disconnected::class);
    expect($model->type)->toBe('Disconnected');
    expect($model->userId)->toBe('3');
    expect($model->userName)->toBe('Elix');
    expect($model->steamId)->toBe('[U:1:302549372]');
    expect($model->userTeam)->toBe('TERRORIST');
    expect($model->reason)->toBe('NETWORK_DISCONNECT_DISCONNECT_BY_USER');
});

test('EnteredTheGame', function () {
    $log = 'L 10/01/2023 - 16:31:24: "GEO<0><[U:1:353168853]><>" entered the game';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(EnteredTheGame::class);
    expect($model->type)->toBe('EnteredTheGame');
    expect($model->userId)->toBe('0');
    expect($model->userName)->toBe('GEO');
    expect($model->steamId)->toBe('[U:1:353168853]');
});

test('GotTheBomb', function () {
    $log = 'L 10/01/2023 - 16:37:01: "Scriib<8><[U:1:94156635]><TERRORIST>" triggered "Got_The_Bomb"';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(GotTheBomb::class);
    expect($model->type)->toBe("GotTheBomb");
    expect($model->userName)->toBe("Scriib");
    expect($model->userId)->toBe("8");
    expect($model->team)->toBe("TERRORIST");
    expect($model->steamId)->toBe("[U:1:94156635]");
});

test('Kill', function () {
    $log = 'L 10/01/2023 - 16:32:00: "GEO<0><[U:1:353168853]><CT>" [-835 525 -32] killed "Elix<3><[U:1:302549372]><TERRORIST>" [-762 615 -30] with "m4a1_silencer" (headshot)';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(Kill::class);
    expect($model->type)->toBe('Kill');
    expect($model->killerId)->toBe("0");
    expect($model->killerName)->toBe("GEO");
    expect($model->killerSteamId)->toBe("[U:1:353168853]");
    expect($model->killerTeam)->toBe("CT");
    expect($model->killerX)->toBe(-835);
    expect($model->killerY)->toBe(525);
    expect($model->killerZ)->toBe(-32);
    expect($model->killedName)->toBe("Elix");
    expect($model->killedId)->toBe("3");
    expect($model->killedSteamId)->toBe("[U:1:302549372]");
    expect($model->killedTeam)->toBe("TERRORIST");
    expect($model->killedX)->toBe(-762);
    expect($model->killedY)->toBe(615);
    expect($model->killedZ)->toBe(-30);
    expect($model->weapon)->toBe("m4a1_silencer");
    expect($model->headshot)->toBe(" (headshot)");
});

test('KillAssist', function () {
    $log = 'L 10/01/2023 - 16:32:16: "Elix<3><[U:1:302549372]><TERRORIST>" assisted killing "GEO<0><[U:1:353168853]><CT>"';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(KillAssist::class);
    expect($model->type)->toBe('KillAssist');
    expect($model->assisterId)->toBe("3");
    expect($model->assisterName)->toBe("Elix");
    expect($model->assisterSteamId)->toBe("[U:1:302549372]");
    expect($model->assisterTeam)->toBe("TERRORIST");
    expect($model->killedId)->toBe("0");
    expect($model->killedName)->toBe("GEO");
    expect($model->killedSteamId)->toBe("[U:1:353168853]");
    expect($model->killedTeam)->toBe("CT");
});

test('MatchEnd', function () {
    $log = 'L 10/01/2023 - 17:18:40: Game Over: competitive mg_epic_bomb de_inferno score 15:15 after 42 min';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(MatchEnd::class);
    expect($model->type)->toBe('MatchEnd');
    expect($model->mapGroup)->toBe("mg_epic_bomb");
    expect($model->map)->toBe("de_inferno");
    expect($model->scoreA)->toBe(15);
    expect($model->scoreB)->toBe(15);
    expect($model->duration)->toBe(42);
});

test('MatchStart', function () {
    $log = 'L 10/01/2023 - 17:19:10: World triggered "Match_Start" on "de_inferno"';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(MatchStart::class);
    expect($model->type)->toBe('MatchStart');
    expect($model->map)->toBe("de_inferno");
});

test('MatchStatus', function () {
    $log = 'L 10/01/2023 - 16:38:24: MatchStatus: Score: 0:1 on map "de_inferno" RoundsPlayed: 1';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(MatchStatus::class);
    expect($model->type)->toBe('MatchStatus');
    expect($model->scoreA)->toBe(0);
    expect($model->scoreB)->toBe(1);
    expect($model->map)->toBe("de_inferno");
    expect($model->roundsPlayed)->toBe(1);
});

test('Purchased', function () {
    $log = 'L 10/01/2023 - 16:38:28: "Elix<3><[U:1:302549372]><TERRORIST>" purchased "sawedoff"';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(Purchased::class);
    expect($model->type)->toBe('Purchased');
    expect($model->userId)->toBe("3");
    expect($model->userName)->toBe("Elix");
    expect($model->steamId)->toBe("[U:1:302549372]");
    expect($model->userTeam)->toBe("TERRORIST");
    expect($model->object)->toBe("sawedoff");
});

test('RoundEnd', function () {
    $log = 'L 10/01/2023 - 16:39:30: World triggered "Round_End"';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(RoundEnd::class);
    expect($model->type)->toBe('RoundEnd');
});

test('RoundRestart', function () {
    // @todo
});

test('RoundScored', function () {
    $log = 'L 10/01/2023 - 16:39:30: Team "TERRORIST" triggered "SFUI_Notice_Terrorists_Win" (CT "0") (T "2")';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(RoundScored::class);
    expect($model->type)->toBe('RoundScored');
    expect($model->team)->toBe("TERRORIST");
    expect($model->winType)->toBe(RoundScored::NORMAL);
});

test('RoundStart', function () {
    $log = 'L 10/01/2023 - 16:40:33: World triggered "Round_Start"';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(RoundStart::class);
    expect($model->type)->toBe('RoundStart');
});

test('Say', function () {
    // @todo
});

test('SwitchTeam', function () {
    $log = 'L 10/01/2023 - 16:54:57: "GEO<0><[U:1:353168853]>" switched from team <CT> to <TERRORIST>';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(SwitchTeam::class);
    expect($model->type)->toBe('SwitchTeam');
    expect($model->userId)->toBe('0');
    expect($model->userName)->toBe('GEO');
    expect($model->steamId)->toBe("[U:1:353168853]");
    expect($model->newTeam)->toBe('TERRORIST');
    expect($model->oldTeam)->toBe('CT');
});

test('TeamScored', function () {
    $log = 'L 10/01/2023 - 16:55:44: Team "TERRORIST" scored "8" with "5" players';
    
    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(TeamScored::class);
    expect($model->type)->toBe('TeamScored');

    expect($model->team)->toBe('TERRORIST');
    expect($model->score)->toBe(8);
    expect($model->players)->toBe(5);
});

test('Threw - flash', function () {
    $log = 'L 10/01/2023 - 16:56:14: "index<4><[U:1:98202654]><TERRORIST>" threw flashbang [1172 435 158] flashbang entindex 930)';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(Threw::class);
    expect($model->type)->toBe('Threw');

    expect($model->userId)->toBe("4");
    expect($model->userName)->toBe("index");
    expect($model->userTeam)->toBe("TERRORIST");
    expect($model->steamId)->toBe("[U:1:98202654]");
    expect($model->item)->toBe("flashbang");
    expect($model->entindex)->toBe(930);
    expect($model->posX)->toBe(1172);
    expect($model->posY)->toBe(435);
    expect($model->posZ)->toBe(158);
});

test('Threw - smoke', function () {
    $log = 'L 10/01/2023 - 16:58:37: "Scriib<8><[U:1:94156635]><CT>" threw smokegrenade [735 2440 138]';

    $model = Patterns::match($log);

    expect($model)->toBeInstanceOf(Threw::class);
    expect($model->type)->toBe('Threw');

    expect($model->userId)->toBe("8");
    expect($model->userName)->toBe("Scriib");
    expect($model->userTeam)->toBe("CT");
    expect($model->steamId)->toBe("[U:1:94156635]");
    expect($model->item)->toBe("smokegrenade");
    expect($model->entindex)->toBeNull();
    expect($model->posX)->toBe(735);
    expect($model->posY)->toBe(2440);
    expect($model->posZ)->toBe(138);
});