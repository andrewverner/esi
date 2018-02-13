<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\characters\CalendarEventResponse;

class CharacterCalendarEventGetRequest extends Request
{
    public function __construct($characterId, $eventId)
    {
        $this->url = "/characters/{$characterId}/calendar/{$eventId}/";
    }

    public function response($data)
    {
        return new CalendarEventResponse($data);
    }
}
