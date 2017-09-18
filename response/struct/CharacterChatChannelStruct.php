<?php

namespace ESC\response\struct;

class CharacterChatChannelStruct extends Struct
{
    public $allowed;
    public $blocked;
    public $channelId;
    public $comparisonKey;
    public $hasPassword;
    public $motd;
    public $muted;
    public $name;
    public $operators;
    public $ownerId;
}
