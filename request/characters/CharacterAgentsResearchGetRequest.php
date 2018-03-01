<?php

namespace ESC\request\characters;

use ESC\response\struct\CharacterAgentResearchStruct;

class CharacterAgentsResearchGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/agents_research/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CharacterAgentResearchStruct::class;
}
