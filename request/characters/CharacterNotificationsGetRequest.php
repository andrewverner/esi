<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterNotificationStruct;

class CharacterNotificationsGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/notifications/";
    }

    public function response($data)
    {
        return $this->responseList($data, CharacterNotificationStruct::class);
    }
}
