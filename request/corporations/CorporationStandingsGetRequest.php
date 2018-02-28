<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 12:17
 */

namespace ESC\request\corporations;

use ESC\request\Request;
use ESC\response\struct\StandingStruct;

class CorporationStandingsGetRequest extends Request
{
    public function __construct($corporationId)
    {
        $this->url = "/corporations/{$corporationId}/standings/";
    }

    public function response($data)
    {
        return $this->responseList($data, StandingStruct::class);
    }
}
