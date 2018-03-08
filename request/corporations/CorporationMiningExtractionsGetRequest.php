<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 15:32
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationMiningExtractionsStruct;

class CorporationMiningExtractionsGetRequest extends CorporationRequest
{
    protected $url = '/corporation/{corporation_id}/mining/extractions/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationMiningExtractionsStruct::class;
}
