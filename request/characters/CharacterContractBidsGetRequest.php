<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 10:55
 */

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\ContractBidStruct;

class CharacterContractBidsGetRequest extends Request
{
    public function __construct($characterId, $contractId)
    {
        $this->url = "/characters/{$characterId}/contracts/{$contractId}/bids/";
    }

    public function response($data)
    {
        return $this->responseList($data, ContractBidStruct::class);
    }
}
