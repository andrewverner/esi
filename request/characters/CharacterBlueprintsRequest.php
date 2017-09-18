<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterBlueprintScruct;

class CharacterBlueprintsRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/blueprints/";
    }

    public function response($data)
    {
        if (empty($data)) {
            return null;
        }

        $list = [];
        foreach ($data as $blueprint) {
            $list[] = new CharacterBlueprintScruct($blueprint);
        }

        return $list;
    }
}
