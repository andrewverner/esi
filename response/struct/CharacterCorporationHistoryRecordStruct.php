<?php

namespace ESC\response\struct;

class CharacterCorporationHistoryRecordStruct extends Struct
{
    public $corporationId;
    public $isDeleted;
    public $recordId;
    public $startDate;

    public function __construct($data)
    {
        parent::__construct($data);
        $this->startDate = new \DateTime($this->startDate);
    }
}
