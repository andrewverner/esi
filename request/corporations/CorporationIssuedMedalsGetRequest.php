<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:14
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\IssuedMedalStruct;

class CorporationIssuedMedalsGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/medals/issued/";
    }

    public function response($data)
    {
        return $this->responseList($data, IssuedMedalStruct::class);
    }
}
