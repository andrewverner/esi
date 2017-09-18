<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterContactNotificationStruct;

class CharacterContactsNotificationsRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/notifications/contacts/";
    }

    public function response($data)
    {
        if (empty($data)) {
            return null;
        }

        $list = [];
        foreach ($data as $notification) {
            $list[] = new CharacterContactNotificationStruct($notification);
        }

        return $list;
    }
}
