<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 16.02.18
 * Time: 12:55
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\AssetStruct;

class CorporationAssetsGetRequest extends Request
{
    public function __construct($id)
    {
        $this->url = "/corporations/{$id}/assets/";
    }

    public function response($data)
    {
        return $this->responseList($data, AssetStruct::class);
    }
}
