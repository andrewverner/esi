<?php

namespace ESC\request\characters;

use ESC\response\struct\CharacterMedalStruct;

class CharacterMedalsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/medals/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CharacterMedalStruct::class;
}
