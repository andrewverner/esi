<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:32
 */

namespace ESC\request\corporations;

class CorporationIconsGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/icons/';
    protected $responseType = self::RESPONSE_TYPE_RAW;
}
