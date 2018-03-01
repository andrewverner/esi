<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:59
 */

namespace ESC\request\corporations;

use ESC\response\struct\CorporationRoleStruct;

class CorporationRolesGetRequest extends CorporationRequest
{
    protected $url = '/corporations/{corporation_id}/roles/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CorporationRoleStruct::class;
}
