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

    public function __construct($data)
    {
        parent::__construct($data);

        if ($this->fuelExpires) {
            $this->fuelExpires = new \DateTime($this->fuelExpires);
        }
        if ($this->stateTimerStart) {
            $this->stateTimerStart = new \DateTime($this->stateTimerStart);
        }
        if ($this->stateTimerEnd) {
            $this->stateTimerEnd = new \DateTime($this->stateTimerEnd);
        }
        if ($this->unanchorsAt) {
            $this->unanchorsAt = new \DateTime($this->unanchorsAt);
        }
        if ($this->nextReinforceApply) {
            $this->nextReinforceApply = new \DateTime($this->nextReinforceApply);
        }

        if ($this->services) {
            foreach ($this->services as &$service) {
                $service = new CorporationStructureServiceStruct($service);
            }
        }
    }
}
