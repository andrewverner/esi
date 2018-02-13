<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterContactNotificationStruct;

class CharacterContactsNotificationsGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/notifications/contacts/";
    }

    public function response($data)
    {
        return $this->responseList($data, CharacterContactNotificationStruct::class);
    }
}
