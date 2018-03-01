<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 20.02.18
 * Time: 10:49
 */

namespace ESC\response\struct;

class ContractStruct extends Struct
{
    public $contractId;
    public $issuerId;
    public $issuerCorporationId;
    public $assigneeId;
    public $acceptorId;
    public $startLocationId;
    public $endLocationId;
    public $type;
    public $status;
    public $title;
    public $forCorporation;
    public $availability;
    public $dateIssued;
    public $dateExpired;
    public $dateAccepted;
    public $daysToComplete;
    public $dateCompleted;
    public $price;
    public $reward;
    public $collateral;
    public $buyout;
    public $volume;

    protected $dateTimeProps = [
        'dateAccepted',
        'dateCompleted'
    ];
}
