<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class Connected extends Model
{
    public const PATTERN = '/"(?P<userName>.+)[<](?P<userId>\d+)[>][<](?P<steamId>.*)[>][<][>]" connected, address "(?P<address>.*)"/';

    public string $type = 'Connected';

    public string $userId;

    public string $userName;

    public string $steamId;

    public string $address;
}
