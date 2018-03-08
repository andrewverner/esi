<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 11:01
 */

namespace ESC\response\struct;

class ContractItemStruct extends Struct
{
    public $recordId;
    public $typeId;
    public $quantity;
    public $rawQuantity;
    public $isSingleton;
    public $isIncluded;
}
