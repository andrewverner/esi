<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 15:26
 */

namespace ESC\request\characters;

use ESC\response\struct\CharacterMiningStruct;

class CharacterMiningGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/mining/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CharacterMiningStruct::class;
}
