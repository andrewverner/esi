<?php

namespace ESC\request\characters;

use ESC\response\struct\CharacterNotificationStruct;

class CharacterNotificationsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/notifications/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CharacterNotificationStruct::class;
}
