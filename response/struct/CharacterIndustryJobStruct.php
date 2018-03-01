<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 14:56
 */

namespace ESC\response\struct;

class CharacterIndustryJobStruct extends Struct
{
    public $jobId;
    public $installerId;
    public $facilityId;
    public $stationId;
    public $activityId;
    public $blueprintId;
    public $blueprintTypeId;
    public $blueprintLocationId;
    public $outputLocationId;
    public $runs;
    public $cost;
    public $licensedRuns;
    public $probability;
    public $productTypeId;
    public $status;
    public $duration;
    public $startDate;
    public $endDate;
    public $pauseDate;
    public $completedDate;
    public $completedCharacterId;
    public $successfulRuns;

    protected $dateTimeProps = [
        'startDate',
        'endDate',
        'pauseDate',
        'completedDate'
    ];
}
