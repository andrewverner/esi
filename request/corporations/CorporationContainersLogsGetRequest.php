<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:14
 */

namespace ESC\request\corporations;

use ESC\response\struct\ContainerLogRecordStruct;

class CorporationContainersLogsGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/containers/logs/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = ContainerLogRecordStruct::class;
}
