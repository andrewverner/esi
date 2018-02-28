<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\StandingStruct;

class CharacterStandingsGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/standings/";
    }

    public function response($data)
    {
        return $this->responseList($data, StandingStruct::class);
    }
}