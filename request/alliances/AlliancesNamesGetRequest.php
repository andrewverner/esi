<?php

namespace ESC\request\alliances;

use ESC\request\Request;

class AlliancesNamesGetRequest extends Request
{
    public function __construct(array $ids)
    {
        $this->url .= '/alliances/names/?alliance_ids=' . implode(',', $ids);
    }
}
