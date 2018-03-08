<?php

namespace ESC\request\characters;

use ESC\response\characters\CharacterResponse;

class CharacterGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/';
    protected $responseType = self::RESPONSE_TYPE_SINGLE;
    protected $responseInstanceType = CharacterResponse::class;
}
