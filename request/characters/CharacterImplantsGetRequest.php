<?php

namespace ESC\request\characters;

class CharacterImplantsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/implants/';
    protected $responseType = self::RESPONSE_TYPE_RAW;
}
