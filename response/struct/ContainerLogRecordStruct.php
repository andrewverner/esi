<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 12:15
 */

namespace ESC\response\struct;

class ContainerLogRecordStruct extends Struct
{
    public $loggedAt;
    public $containerId;
    public $containerTypeId;
    public $characterId;
    public $locationId;
    public $locationFlag;
    public $action;
    public $passwordType;
    public $typeId;
    public $quantity;
    public $oldConfigBitmask;
    public $newConfigBitmask;

    protected $dateTimeProps = ['loggedAt'];
}
