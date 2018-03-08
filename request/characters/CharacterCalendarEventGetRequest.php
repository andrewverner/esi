<?php

namespace ESC\request\characters;

use ESC\response\characters\CalendarEventResponse;

class CharacterCalendarEventGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/calendar/{event_id}/';
    protected $responseType = self::RESPONSE_TYPE_SINGLE;
    protected $responseInstanceType = CalendarEventResponse::class;

    public function __construct($characterId, $eventId)
    {
        parent::__construct($characterId);
        $this->url = str_replace('{event_id}', $eventId, $this->url);
    }
}
