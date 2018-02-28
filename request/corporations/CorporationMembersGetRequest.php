<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:31
 */

namespace ESC\request\corporations;

use ESC\request\Request;

class CorporationMembersGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/members/";
    }
}
