<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 10:47
 */

namespace ESC\request\characters;

use ESC\response\struct\ContractStruct;

class CharacterContractsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/contracts/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = ContractStruct::class;
}
