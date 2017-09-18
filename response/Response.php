<?php

namespace ESC\response;

class Response
{
    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $key = lcfirst(str_replace('_', '', ucwords($key, '_')));

            $this->{$key} = $value;
        }
    }
}
