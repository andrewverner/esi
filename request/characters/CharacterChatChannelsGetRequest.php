<?php

namespace ESC\request\characters;

use ESC\request\Request;
use ESC\response\struct\CharacterChatChannelStruct;

class CharacterChatChannelsGetRequest extends Request
{
    public function __construct($characterId)
    {
        $this->url = "/characters/{$characterId}/chat_channels/";
    }

    public function response($data)
    {
        return $this->responseList($data, CharacterChatChannelStruct::class);
    }
}
