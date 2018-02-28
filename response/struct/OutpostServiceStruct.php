<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:53
 */

namespace ESC\response\struct;

class OutpostServiceStruct extends Struct
{
    public $serviceName;
    public $minimumStanding;
    public $surchargePerBadStanding;
    public $discountPerGoodStanding;
}
