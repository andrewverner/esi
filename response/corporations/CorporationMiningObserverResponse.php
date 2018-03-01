<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 16:54
 */

namespace ESC\response\corporations;

use ESC\response\Response;

class CorporationMiningObserverResponse extends Response
{
    public $lastUpdated;
    public $characterId;
    public $recordedCorporationId;
    public $typeId;
    public $quantity;

    protected $dateTimeProps = ['lastUpdated'];
}
