<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:38
 */

namespace ESC\response\struct;

class MemberTrackingStruct extends Struct
{
    public $characterId;
    public $startDate;
    public $baseId;
    public $logonDate;
    public $logoffDate;
    public $locationId;
    public $shipTypeId;

    protected $dateTimeProps = [
        'startDate',
        'logonDate',
        'logoffDate'
    ];
}
