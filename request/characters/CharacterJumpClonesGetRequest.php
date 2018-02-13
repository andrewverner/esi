<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\characters\CharacterJumpClonesResponse;

class CharacterJumpClonesGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/clones/";
    }

    public function response($data)
    {
        return new CharacterJumpClonesResponse($data);
    }
}
