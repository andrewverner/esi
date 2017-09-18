<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterChatChannelStruct;

class CharacterChatChannelsRequest extends Request
{
    public $type = Request::METHOD_GET;

    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/chat_channels/";
    }

    public function response($data)
    {
        if (empty($data)) {
            return null;
        }

        $list = [];
        foreach ($data as $chatChannel) {
            $list[] = new CharacterChatChannelStruct($chatChannel);
        }

        return $list;
    }
}
