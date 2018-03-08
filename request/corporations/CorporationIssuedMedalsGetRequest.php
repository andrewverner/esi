<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:14
 */

namespace ESC\request\corporations;

use ESC\response\struct\IssuedMedalStruct;

class CorporationIssuedMedalsGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/medals/issued/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = IssuedMedalStruct::class;
}
