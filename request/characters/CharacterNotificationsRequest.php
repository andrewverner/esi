<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterNotificationStruct;

class CharacterNotificationsRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/notifications/";
    }

    public function response($data)
    {
        if (empty($data)) {
            return null;
        }

        $list = [];
        foreach ($data as $notification) {
            $list[] = new CharacterNotificationStruct($notification);
        }

        return $list;
    }
}
