<?php

namespace ESC\request\characters;

use ESC\request\Request;

class CharactersNamesRequest extends Request
{
    public $type = Request::METHOD_GET;
    public $url = '/characters/names/';

    public function __construct($ids)
    {
        $this->url .= '?character_ids=' . implode(',', $ids);
    }
}
