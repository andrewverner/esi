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

class CorporationContractBidsGetRequest extends Request
{
    public function __construct($corporationId, $contractId)
    {
        $this->url = "/corporations/{$corporationId}/contracts/{$contractId}/bids/";
    }

    public function response($data)
    {
        return $this->responseList($data, ContractBidStruct::class);
    }
}
