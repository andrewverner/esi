<?php

namespace ESC\request\alliances;

use ESC\request\Request;
use ESC\response\alliances\AllianceGetResponse;

class AllianceGetRequest extends Request
{
    public function __construct($id)
    {
        $this->url = "/alliances/{$id}/";
    }

    public function response($data)
    {
        return new AllianceGetResponse($data);
    }
}
