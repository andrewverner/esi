<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 12:21
 */

namespace ESC\request\characters;

use ESC\response\struct\CharacterFittingStruct;

class CharacterFittingsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/fittings/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CharacterFittingStruct::class;
}
