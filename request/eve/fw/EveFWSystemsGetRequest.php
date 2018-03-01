<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 12:10
 */

namespace ESC\request\eve\fw;

use ESC\request\Request;
use ESC\response\struct\EveFWSystemStruct;

class EveFWSystemsGetRequest extends Request
{
    protected $url = '/fw/systems/';

    public function response($data)
    {
        return $this->responseList($data, EveFWSystemStruct::class);
    }
}
