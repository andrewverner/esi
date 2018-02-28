<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 17:46
 */

namespace ESC\response\eve\dogma;

use ESC\response\Response;
use ESC\response\struct\EveDogmaEffectModifierStruct;

class EveDogmaEffectResponse extends Response
{
    public $effectId;
    public $name;
    public $displayName;
    public $description;
    public $iconId;
    public $effectCategory;
    public $preExpression;
    public $postExpression;
    public $isOffensive;
    public $isAssistance;
    public $disallowAutoRepeat;
    public $published;
    public $isWarpSafe;
    public $rangeChance;
    public $electronicChance;
    public $durationAttributeId;
    public $trackingSpeedAttributeId;
    public $dischargeAttributeId;
    public $rangeAttributeId;
    public $falloffAttributeId;
    public $modifiers;

    public function __construct($data)
    {
        parent::__construct($data);
        if ($this->modifiers) {
            foreach ($this->modifiers as &$modifier) {
                $modifier = new EveDogmaEffectModifierStruct($modifier);
            }
        }
    }
}
