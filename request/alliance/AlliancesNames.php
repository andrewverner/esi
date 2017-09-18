<?php

namespace ESC\request\alliance;

use ESC\request\Request;

class AlliancesNames extends Request
{
    public $url = '/alliances/names/';

    public function __construct(array $ids)
    {
        $this->url .= '?alliance_ids=' . implode(',', $ids);
    }
}
