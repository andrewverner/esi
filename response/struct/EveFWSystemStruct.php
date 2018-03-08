<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 12:16
 */

namespace ESC\response\struct;

class EveFWSystemStruct extends Struct
{
    public $solarSystemId;
    public $occupierFactionId;
    public $ownerFactionId;
    public $victoryPoints;
    public $victoryPointsThreshold;
    public $contested;
}
