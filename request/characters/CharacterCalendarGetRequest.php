<?php

namespace ESC\request\characters;

use ESC\request\Request;

class CharacterCalendarGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/calendar/";
    }

    public function response($data)
    {
        return $this->responseList($data, 'CalendarRecordStruct');
    }
}
