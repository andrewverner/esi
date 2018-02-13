<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterMedalStruct;

class CharacterMedalsGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/medals/";
    }

    public function response($data)
    {
        return $this->responseList($data, CharacterMedalStruct::class);
    }
}
