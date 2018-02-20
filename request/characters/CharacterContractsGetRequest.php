<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 10:47
 */

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\ContractStruct;

class CharacterContractsGetRequest extends Request
{
    private $characterId;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/contracts/";
        $this->characterId = $characterId;
    }

    public function response($data)
    {
        return $this->responseList($data, ContractStruct::class);
    }
}
