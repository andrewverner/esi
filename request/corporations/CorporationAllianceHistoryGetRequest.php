<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:00
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\CorporationAllianceHistoryRecordStruct;

class CorporationAllianceHistoryGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/alliancehistory/";
    }

    public function response($data)
    {
        return $this->responseList($data, CorporationAllianceHistoryRecordStruct::class);
    }
}
