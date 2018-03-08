<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:35
 */

namespace ESC\request\corporations;

class CorporationMembersTitlesGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/members/titles/';
    protected $responseType = self::RESPONSE_TYPE_RAW;
}
