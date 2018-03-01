<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:00
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationAllianceHistoryRecordStruct;

class CorporationAllianceHistoryGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/alliancehistory/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationAllianceHistoryRecordStruct::class;
}
