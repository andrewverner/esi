<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 16:40
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\CorporationTitleStruct;

class CorporationTitlesGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/titles/";
    }

    public function response($data)
    {
        return $this->responseList($data, CorporationTitleStruct::class);
    }
}
