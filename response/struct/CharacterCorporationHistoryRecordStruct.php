<?php

namespace ESC\response\struct;

class CharacterCorporationHistoryRecordStruct extends Struct
{
    public $corporationId;
    public $isDeleted;
    public $recordId;
    public $startDate;

    protected $dateTimeProps = ['startDate'];
}
