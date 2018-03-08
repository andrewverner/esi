<?php

namespace ESC\request\characters;

use ESC\core\sorter\ISorter;
use ESC\response\struct\BlueprintScruct;

class CharacterBlueprintsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/blueprints/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = BlueprintScruct::class;

    public function __construct($characterId, ISorter $sorter = null)
    {
        parent::__construct($characterId);
        $this->sorter = $sorter;
    }
}
