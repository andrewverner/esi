<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\characters\CharacterResponse;

class CharacterGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/";
    }

    public function response($data)
    {
        return new CharacterResponse($data);
    }
}
