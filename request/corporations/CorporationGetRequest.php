<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 11:48
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\corporations\CorporationResponse;

class CorporationGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/";
    }

    public function response($data)
    {
        return new CorporationResponse($data);
    }
}
