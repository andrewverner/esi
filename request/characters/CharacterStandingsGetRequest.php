<?php

namespace ESC\request\characters;

use ESC\response\struct\StandingStruct;

class CharacterStandingsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/standings/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = StandingStruct::class;
}
