<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 12:11
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationRolesHistoryRecordStruct;

class CorporationRolesHistoryGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/roles/history/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationRolesHistoryRecordStruct::class;
}
