<?php

namespace ESC\request\characters;

use ESC\response\struct\CharacterContactStruct;

class CharacterContactsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/contacts/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CharacterContactStruct::class;
}
