<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 16:45
 */

namespace ESC\request\corporations;

class NPCCorporationsGetRequest extends CorporationRequest
{
    protected $url = "/corporations/npccorps/";
    protected $responseType = self::RESPONSE_TYPE_RAW;
}
