<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:31
 */

namespace ESC\request\corporations;

class CorporationMembersGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/members/';
    protected $responseType = self::RESPONSE_TYPE_RAW;
}
