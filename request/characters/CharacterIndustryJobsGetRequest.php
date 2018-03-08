<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 14:49
 */

namespace ESC\request\characters;

use ESC\response\struct\CharacterIndustryJobStruct;

class CharacterIndustryJobsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/industry/jobs/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CharacterIndustryJobStruct::class;
}
