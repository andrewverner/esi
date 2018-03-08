<?php

namespace ESC\request\characters;

use ESC\response\struct\CharacterContactNotificationStruct;

class CharacterContactsNotificationsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/notifications/contacts/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CharacterContactNotificationStruct::class;
}
