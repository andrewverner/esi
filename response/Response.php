<?php

namespace ESC\response;

class Response
{
    protected $dateTimeProps = [];

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $key = lcfirst(str_replace('_', '', ucwords($key, '_')));
            $this->{$key} = (!empty($this->dateTimeProps) && in_array($key, $this->dateTimeProps) && $value) ? new \DateTime($value) : $value;
        }
    }
}
