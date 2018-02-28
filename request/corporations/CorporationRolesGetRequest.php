<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:59
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\CorporationRoleStruct;

class CorporationRolesGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/roles/";
    }

    public function response($data)
    {
        return $this->responseList($data, CorporationRoleStruct::class);
    }
}
