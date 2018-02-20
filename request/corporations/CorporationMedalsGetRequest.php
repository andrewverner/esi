<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:37
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\CorporationMedalStruct;

class CorporationMedalsGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/medals/";
    }

    public function response($data)
    {
        return $this->responseList($data, CorporationMedalStruct::class);
    }
}
