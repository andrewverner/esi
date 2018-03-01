<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 12:17
 */

namespace ESC\request\corporations;

use ESC\response\struct\StandingStruct;

class CorporationStandingsGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/standings/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = StandingStruct::class;
}
