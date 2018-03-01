<?php

namespace ESC\response\struct;

class CharacterContactNotificationStruct extends Struct
{
    public $message;
    public $notificationId;
    public $sendDate;
    public $senderCharacterId;
    public $standingLevel;

    protected $dateTimeProps = ['sendDate'];
}
