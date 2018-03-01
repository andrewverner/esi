<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:21
 */

namespace ESC\request\corporations;

use ESC\response\corporations\CorporationDivisionsResponse;

class CorporationDivisionsGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/divisions/';
    protected $responseType = self::RESPONSE_TYPE_SINGLE;
    protected $responseInstanceType = CorporationDivisionsResponse::class;
}
