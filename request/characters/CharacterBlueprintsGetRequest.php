<?php

namespace ESC\request\characters;

use ESC\core\sorter\ISorter;
use ESC\request\Request;
use ESC\response\struct\BlueprintScruct;

class CharacterBlueprintsGetRequest extends Request
{
    public function __construct($characterId, ISorter $sorter = null)
    {
        $this->url = "/characters/{$characterId}/blueprints/";
        $this->sorter = $sorter;
    }

    public function response($data)
    {
        return $this->responseList($data, BlueprintScruct::class);
    }
}
