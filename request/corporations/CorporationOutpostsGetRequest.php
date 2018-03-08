<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:42
 */

namespace ESC\request\corporations;

class CorporationOutpostsGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/outposts/';
    protected $responseType = self::RESPONSE_TYPE_RAW;
}
