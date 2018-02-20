<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 10:55
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\ContractBidStruct;
use ESC\response\struct\ContractItemStruct;

class CorporationContractItemsGetRequest extends Request
{
    public function __construct($corporationId, $contractId)
    {
        $this->url = "/corporations/{$corporationId}/contracts/{$contractId}/items/";
    }

    public function response($data)
    {
        return $this->responseList($data, ContractItemStruct::class);
    }
}
