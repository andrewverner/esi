<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:45
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\corporations\CorporationOutpostResponse;

class CorporationOutpostGetRequest extends Request
{
    public function __construct($corporationId, $outpostId)
    {
        $this->url = "/corporations/{$corporationId}/outposts/{$outpostId}/";
    }

    public function response($data)
    {
        return new CorporationOutpostResponse($data);
    }
}
