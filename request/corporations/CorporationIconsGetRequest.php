<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:32
 */

namespace ESC\request\corporations;

use ESC\request\Request;

class CorporationIconsGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/icons/";
    }
}
