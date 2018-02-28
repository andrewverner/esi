<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 16:26
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\corporations\CorporationStarBaseResponse;

class CorporationStarBaseGetRequest extends Request
{
    public function __construct($corporationId, $starBaseId)
    {
        $this->url = "/corporations/{$corporationId}/starbases/{$starBaseId}/";
    }

    public function response($data)
    {
        return new CorporationStarBaseResponse($data);
    }
}
