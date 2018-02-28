<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:35
 */

namespace ESC\request\corporations;

use ESC\request\Request;

class CorporationMembersTitlesGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/members/titles/";
    }
}
