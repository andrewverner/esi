<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:21
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\corporations\CorporationDivisionsResponse;

class CorporationDivisionsGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/divisions/";
    }

    public function response($data)
    {
        return new CorporationDivisionsResponse($data);
    }
}
