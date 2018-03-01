<?php

namespace ESC\request\characters;

use ESC\response\characters\CharacterJumpClonesResponse;

class CharacterJumpClonesGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/clones/';
    protected $responseType = self::RESPONSE_TYPE_SINGLE;
    protected $responseInstanceType = CharacterJumpClonesResponse::class;
}
