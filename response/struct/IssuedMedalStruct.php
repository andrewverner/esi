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

    public function __construct($data)
    {
        parent::__construct($data);
        $this->issuedAt = new \DateTime($this->issuedAt);
    }
}
