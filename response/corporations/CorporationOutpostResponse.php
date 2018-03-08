<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:48
 */

namespace ESC\response\corporations;

use ESC\response\Response;
use ESC\response\struct\CoordinatesStruct;
use ESC\response\struct\OutpostServiceStruct;

class CorporationOutpostResponse extends Response
{
    public $ownerId;
    public $systemId;
    public $dockingCostPerShipVolume;
    public $officeRentalCost;
    public $typeId;
    public $reprocessingEfficiency;
    public $reprocessingStationTake;
    public $standingOwnerId;
    public $coordinates;
    public $services;

    public function __construct($data)
    {
        parent::__construct($data);
        $this->coordinates = new CoordinatesStruct($this->coordinates);
        foreach ($this->services as &$service) {
            $service = new OutpostServiceStruct($service);
        }
    }
}
