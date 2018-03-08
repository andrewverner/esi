<?php

namespace ESC\request\characters;

class CharacterCalendarEventAttendeesGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/calendar/{event_id}/attendees/';
    protected $responseType = self::RESPONSE_TYPE_RAW;

    public function __construct($characterId, $eventId)
    {
        parent::__construct($characterId);
        $this->url = str_replace('{event_id}', $eventId, $this->url);
    }
}
