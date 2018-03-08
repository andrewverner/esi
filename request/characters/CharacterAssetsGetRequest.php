<?php

namespace ESC\request\characters;

use ESC\core\sorter\ISorter;
use ESC\response\struct\AssetStruct;

class CharacterAssetsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/assets/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = AssetStruct::class;

    public function __construct($characterId, ISorter $sorter = null)
    {
        parent::__construct($characterId);
        $this->sorter = $sorter;
    }
}
