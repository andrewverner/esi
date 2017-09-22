<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\characters\CharacterJumpClonesResponse;

class CharacterJumpClonesRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/clones/";
    }

    public function response($data)
    {
        return new CharacterJumpClonesResponse($data);
    }
}
