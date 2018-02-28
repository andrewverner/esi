<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:37
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\MemberTrackingStruct;

class CorporationMemberTrackingGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/membertracking/";
    }

    public function response($data)
    {
        return $this->responseList($data, MemberTrackingStruct::class);
    }
}
