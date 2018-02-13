<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\characters\CharacterFatigueResponse;

class CharacterFatigueGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/fatigue/";
    }

    public function response($data)
    {
        return new CharacterFatigueResponse($data);
    }
}
