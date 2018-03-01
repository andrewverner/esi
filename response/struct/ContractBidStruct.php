<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 11:01
 */

namespace ESC\response\struct;

class ContractBidStruct extends Struct
{
    public $bidId;
    public $bidderId;
    public $dateBid;
    public $amount;

    protected $dateTimeProps = ['dateBid'];
}
