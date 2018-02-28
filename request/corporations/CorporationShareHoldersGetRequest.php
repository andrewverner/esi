<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 12:15
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\CorporationShareHolderStruct;

class CorporationShareHoldersGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/shareholders/";
    }

    public function response($data)
    {
        return $this->responseList($data, CorporationShareHolderStruct::class);
    }
}
