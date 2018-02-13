<?php

namespace ESC\request\characters;

use ESC\request\Request;

class CharactersNamesGetRequest extends Request
{
    public function __construct(array $ids)
    {
        $this->url .= '/characters/names/?character_ids=' . implode(',', $ids);
    }
}
