<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:28
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\CorporationFacilityStruct;

class CorporationFacilitiesGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/facilities/";
    }

    public function response($data)
    {
        return $this->responseList($data, CorporationFacilityStruct::class);
    }
}
