<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 12:15
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationShareHolderStruct;

class CorporationShareHoldersGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/shareholders/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationShareHolderStruct::class;
}
