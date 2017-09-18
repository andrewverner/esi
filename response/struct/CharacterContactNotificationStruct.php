<?php

namespace ESC\response\struct;

class CharacterContactNotificationStruct extends Struct
{
    public $message;
    public $notificationId;
    public $sendDate;
    public $senderCharacterId;
    public $standingLevel;

    public function __construct($data)
    {
        parent::__construct($data);
        $this->sendDate = new \DateTime($this->sendDate);
    }
}
