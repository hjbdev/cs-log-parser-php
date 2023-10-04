<?php

namespace CSLog;

abstract class Model
{
    public const PATTERN = null;

    public string $type;

    public function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}
