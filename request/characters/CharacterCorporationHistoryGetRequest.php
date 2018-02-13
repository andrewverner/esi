<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterCorporationHistoryRecordStruct;

class CharacterCorporationHistoryGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/corporationhistory/";
    }

    public function response($data)
    {
        return $this->responseList($data, CharacterCorporationHistoryRecordStruct::class);
    }
}
