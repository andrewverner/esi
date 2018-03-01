<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:34
 */

namespace ESC\request\corporations;

class CorporationMembersLimitGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/members/limit/';
    protected $responseType = self::RESPONSE_TYPE_RAW;
}
