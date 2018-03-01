<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:37
 */

namespace ESC\request\corporations;

use ESC\response\struct\MemberTrackingStruct;

class CorporationMemberTrackingGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/membertracking/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = MemberTrackingStruct::class;
}
