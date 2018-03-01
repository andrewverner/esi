<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 17:01
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationIndustryJobStruct;

class CorporationIndustryJobsGetRequest extends CorporationRequest
{
    protected $url = '/characters/{character_id}/industry/jobs/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationIndustryJobStruct::class;
}
