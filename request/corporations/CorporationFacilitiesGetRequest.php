<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:28
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationFacilityStruct;

class CorporationFacilitiesGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/facilities/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationFacilityStruct::class;
}
