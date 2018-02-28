<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 16:28
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\CorporationStructureStruct;

class CorporationStructuresGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/structures/";
    }

    public function response($data)
    {
        return $this->responseList($data, CorporationStructureStruct::class);
    }
}
