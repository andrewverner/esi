<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:10
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\BlueprintScruct;

class CorporationBlueprintsGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/blueprints/";
    }

    public function response($data)
    {
        return $this->responseList($data, BlueprintScruct::class);
    }
}
