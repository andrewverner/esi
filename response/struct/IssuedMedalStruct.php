<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 11:27
 */

namespace ESC\response\struct;

class IssuedMedalStruct extends Struct
{
    public $medalId;
    public $characterId;
    public $reason;
    public $status;
    public $issuerId;
    public $issuedAt;

    protected $dateTimeProps = ['issuedAt'];
}
