<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 16:50
 */

namespace ESC\response\struct;

class CorporationMiningObserverStruct extends Struct
{
    public $lastUpdated;
    public $observerId;
    public $observerType;

    protected $dateTimeProps = ['lastUpdated'];
}
