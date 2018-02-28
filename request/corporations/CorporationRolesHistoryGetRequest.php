<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 12:11
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\CorporationRolesHistoryRecordStruct;

class CorporationRolesHistoryGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/roles/history/";
    }

    public function response($data)
    {
        return $this->responseList($data, CorporationRolesHistoryRecordStruct::class);
    }
}
