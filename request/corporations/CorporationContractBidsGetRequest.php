<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 10:55
 */

namespace ESC\request\corporations;

use ESC\response\struct\ContractBidStruct;

class CorporationContractBidsGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/contracts/{contract_id}/bids/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = ContractBidStruct::class;

    public function __construct($corporationId, $contractId)
    {
        parent::__construct($corporationId);
        $this->url = str_replace('{contract_id}', $contractId, $this->url);
    }
}
