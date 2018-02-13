<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterAgentResearchStruct;

class CharacterAgentsResearchGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/agents_research/";
    }

    public function response($data)
    {
        return $this->responseList($data, CharacterAgentResearchStruct::class);
    }
}
