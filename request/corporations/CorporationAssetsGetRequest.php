<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 16.02.18
 * Time: 12:55
 */

namespace ESC\request\corporations;

use ESC\response\struct\AssetStruct;

class CorporationAssetsGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/assets/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = AssetStruct::class;
}
