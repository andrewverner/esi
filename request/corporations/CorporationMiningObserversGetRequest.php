<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 16:49
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationMiningObserverStruct;

class CorporationMiningObserversGetRequest extends CorporationRequest
{
    protected $url = '/corporation/{corporation_id}/mining/observers/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationMiningObserverStruct::class;
}
