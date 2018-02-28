<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:34
 */

namespace ESC\request\corporations;

use ESC\request\Request;

class CorporationMembersLimitGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/members/limit/";
    }
}
