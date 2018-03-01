<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 16:40
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationTitleStruct;

class CorporationTitlesGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/titles/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationTitleStruct::class;
}
