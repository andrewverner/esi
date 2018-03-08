<?php

namespace ESC\request\characters;

use ESC\response\characters\CharacterFatigueResponse;

class CharacterFatigueGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/fatigue/';
    protected $responseType = self::RESPONSE_TYPE_SINGLE;
    protected $responseInstanceType = CharacterFatigueResponse::class;
}
