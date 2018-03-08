<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 16.02.18
 * Time: 14:00
 */

namespace ESC\request\characters;

class CharacterPortraitGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/portrait/';
    protected $responseType = self::RESPONSE_TYPE_RAW;
}
