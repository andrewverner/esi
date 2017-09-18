<?php

namespace ESC\response\struct;

class CharacterNotificationStruct extends Struct
{
    public $isRead;
    public $notificationId;
    public $senderId;
    public $senderType;
    public $text;
    public $timestamp;
    public $type;
}
