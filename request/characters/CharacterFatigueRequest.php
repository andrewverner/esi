<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\characters\CharacterFatigueResponse;

class CharacterFatigueRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/fatigue/";
    }

    public function response($data)
    {
        return new CharacterFatigueResponse($data);
    }
}
