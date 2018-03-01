<?php

namespace ESC\request\characters;

use ESC\response\struct\CharacterCorporationHistoryRecordStruct;

class CharacterCorporationHistoryGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/corporationhistory/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CharacterCorporationHistoryRecordStruct::class;
}
