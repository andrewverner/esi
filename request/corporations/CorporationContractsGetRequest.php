<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 11:08
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\ContractStruct;

class CorporationContractsGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/contracts/";
    }

    public function response($data)
    {
        return $this->responseList($data, ContractStruct::class);
    }
}
