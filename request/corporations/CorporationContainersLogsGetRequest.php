<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:14
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\ContainerLogRecordStruct;

class CorporationContainersLogsGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/containers/logs/";
    }

    public function response($data)
    {
        return $this->responseList($data, ContainerLogRecordStruct::class);
    }
}
