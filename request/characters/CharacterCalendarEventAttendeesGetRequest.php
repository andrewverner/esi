<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\characters\CalendarEventResponse;

class CharacterCalendarEventAttendeesGetRequest extends Request
{
    public function __construct($characterId, $eventId)
    {
        $this->url = "/characters/{$characterId}/calendar/{$eventId}/attendees/";
    }
}
