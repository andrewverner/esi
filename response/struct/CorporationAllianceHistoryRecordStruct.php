<?php

namespace ESC\response\struct;

class CorporationAllianceHistoryRecordStruct extends Struct
{
    public $allianceId;
    public $isDeleted;
    public $recordId;
    public $startDate;

    protected $dateTimeProps = ['startDate'];
}
