<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 11:08
 */

namespace ESC\request\corporations;

use ESC\response\struct\ContractStruct;

class CorporationContractsGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/contracts/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = ContractStruct::class;
}
