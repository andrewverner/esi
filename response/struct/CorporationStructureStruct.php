<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 16:29
 */

namespace ESC\response\struct;

class CorporationStructureStruct extends Struct
{
    public $structureId;
    public $typeId;
    public $corporationId;
    public $systemId;
    public $profileId;
    public $fuelExpires;
    public $services;
    public $stateTimerStart;
    public $stateTimerEnd;
    public $unanchorsAt;
    public $state;
    public $reinforceWeekday;
    public $reinforceHour;
    public $nextReinforceWeekday;
    public $nextReinforceHour;
    public $nextReinforceApply;

    protected $dateTimeProps = [
        'fuelExpires',
        'stateTimerStart',
        'stateTimerEnd',
        'unanchorsAt',
        'nextReinforceApply'
    ];
}
