<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 16:28
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationStructureStruct;

class CorporationStructuresGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/structures/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationStructureStruct::class;
}
