<?php

namespace ESC\request\alliance;

use ESC\request\Request;

class Alliance extends Request
{
    public $url = '/alliances/{id}/';

    public function __construct($id)
    {
        $this->url = strtr($this->url, ['{id}' => $id]);
    }
}
