<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 15:50
 */

namespace ESC\response\struct;

class CorporationStarBaseStruct extends Struct
{
    public $starbaseId;
    public $typeId;
    public $systemId;
    public $moonId;
    public $state;
    public $unanchorAt;
    public $reinforcedUntil;
    public $onlinedSince;

    protected $dateTimeProps = [
        'unanchorAt',
        'reinforcedUntil',
        'onlinedSince'
    ];
}
