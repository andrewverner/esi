<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 01.03.18
 * Time: 15:27
 */

namespace ESC\response\struct;

class CharacterMiningStruct extends Struct
{
    public $date;
    public $solarSystemId;
    public $typeId;
    public $quantity;

    protected $dateTimeProps = ['date'];
}
