<?php

namespace ESC\request\characters;

use ESC\response\struct\CalendarRecordStruct;

class CharacterCalendarGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/calendar/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CalendarRecordStruct::class;
}
