<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterCorporationHistoryRecordStruct;

class CharacterCorporationHistoryRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/corporationhistory/";
    }

    public function response($data)
    {
        if (empty($data)) {
            return null;
        }

        $list = [];
        foreach ($data as $record) {
            $list[] = new CharacterCorporationHistoryRecordStruct($record);
        }

        return $list;
    }
}
