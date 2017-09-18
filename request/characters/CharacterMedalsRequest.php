<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterMedalStruct;

class CharacterMedalsRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/medals/";
    }

    public function response($data)
    {
        if (empty($data)) {
            return null;
        }

        $list = [];
        foreach ($data as $medal) {
            $list[] = new CharacterMedalStruct($medal);
        }

        return $list;
    }
}
