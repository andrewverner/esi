<?php

namespace ESC\request\characters;

use ESC\request\Request;

class CharacterRolesRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/roles/";
    }
}
