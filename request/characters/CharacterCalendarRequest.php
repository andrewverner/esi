<?php

namespace ESC\request\characters;

use ESC\request\Request;

class CharacterCalendarRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/calendar/";
    }

    public function response($data)
    {
        return $this->responseList($data, 'CalendarRecordStruct');
    }
}
