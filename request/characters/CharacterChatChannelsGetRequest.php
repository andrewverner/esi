<?php

namespace ESC\request\characters;

use ESC\response\struct\CharacterChatChannelStruct;

class CharacterChatChannelsGetRequest extends CharacterRequest
{
    protected $url = '/characters/{character_id}/chat_channels/';
    protected $responseType = self::RESPONSE_TYPE_LIST;
    protected $responseInstanceType = CharacterChatChannelStruct::class;
}
