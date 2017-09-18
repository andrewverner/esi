<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterAgentResearchStruct;

class CharacterAgentsResearchRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/agents_research/";
    }

    public function response($data)
    {
        if (empty($data)) {
            return null;
        }

        $list = [];
        foreach ($data as $research) {
            $list[] = new CharacterAgentResearchStruct($research);
        }

        return $list;
    }
}
