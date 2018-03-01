<?php

namespace ESC\request\characters;

class CharacterRolesGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/roles/';
    protected $responseType = self::RESPONSE_TYPE_RAW;
}
