<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterStandingStruct;

class CharacterStandingsRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/standings/";
    }

    public function response($data)
    {
        if (empty($data)) {
            return null;
        }

        $list = [];
        foreach ($data as $standing) {
            $list[] = new CharacterStandingStruct($standing);
        }

        return $list;
    }
}
