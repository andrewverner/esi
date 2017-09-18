<?php

namespace ESC\response\struct;

class Struct
{
    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $key = lcfirst(str_replace('_', '', ucwords($key, '_')));

            $this->{$key} = $value;
        }
    }
}
