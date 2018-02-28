<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 15:56
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\CorporationStarBaseStruct;

class CorporationStarBasesGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/starbases/";
    }

    public function response($data)
    {
        return $this->responseList($data, CorporationStarBaseStruct::class);
    }
}
