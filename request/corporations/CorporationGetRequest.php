<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 11:48
 */

namespace ESC\request\corporations;

use ESC\response\corporations\CorporationResponse;

class CorporationGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/';
    protected $responseType = self::RESPONSE_TYPE_SINGLE;
    protected $responseInstanceType = CorporationResponse::class;
}
