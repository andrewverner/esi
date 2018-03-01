<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 10:55
 */

namespace ESC\request\characters;

use ESC\response\struct\ContractItemStruct;

class CharacterContractItemsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/contracts/{contract_id}/items/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = ContractItemStruct::class;

    public function __construct($characterId, $contractId)
    {
        parent::__construct($characterId);
        $this->url = str_replace('{contract_id}', $contractId, $this->url);
    }
}
