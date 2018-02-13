<?php

namespace ESC\request\characters;

use ESC\request\Request;

class CharacterRolesGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/roles/";
    }
}
