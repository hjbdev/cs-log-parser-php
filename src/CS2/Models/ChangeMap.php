<?php

namespace CSLog\CS2\Models;

use CSLog\Model;

class ChangeMap extends Model
{
    public const PATTERN = '/(Started map|Loading map) "(?P<maps>.*)"/';

    public string $type = 'ChangeMap';

    public string $maps;
}
