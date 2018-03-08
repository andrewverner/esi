<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 15:57
 */

namespace ESC\response\corporations;

use ESC\response\Response;
use ESC\response\struct\StarBaseFuelStruct;

class CorporationStarBaseResponse extends Response
{
    public $fuelBayView;
    public $fuelBayTake;
    public $anchor;
    public $unanchor;
    public $online;
    public $offline;
    public $allowCorporationMembers;
    public $allowAllianceMembers;
    public $useAllianceStandings;
    public $attackStandingThreshold;
    public $attackSecurityStatusThreshold;
    public $attackIfOtherSecurityStatusDropping;
    public $attackIfAtWar;
    public $fuels;

    public function __construct($data)
    {
        parent::__construct($data);
        if ($this->fuels) {
            foreach ($this->fuels as &$fuel) {
                $fuel = new StarBaseFuelStruct($fuel);
            }
        }
    }
}
