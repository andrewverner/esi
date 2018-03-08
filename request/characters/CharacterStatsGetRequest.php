<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 16.02.18
 * Time: 14:17
 */

namespace ESC\request\characters;

class CharacterStatsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/stats/';
    protected $responseType = self::RESPONSE_TYPE_RAW;
}
