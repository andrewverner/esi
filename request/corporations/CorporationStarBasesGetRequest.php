<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 15:56
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationStarBaseStruct;

class CorporationStarBasesGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/starbases/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationStarBaseStruct::class;
}
