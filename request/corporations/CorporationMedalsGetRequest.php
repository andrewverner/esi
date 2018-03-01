<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:37
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationMedalStruct;

class CorporationMedalsGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/medals/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationMedalStruct::class;
}
