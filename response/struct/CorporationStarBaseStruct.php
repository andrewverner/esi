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

    public function __construct($data)
    {
        parent::__construct($data);
        if ($this->unanchorAt) {
            $this->unanchorAt = new \DateTime($this->unanchorAt);
        }
        if ($this->reinforcedUntil) {
            $this->reinforcedUntil = new \DateTime($this->reinforcedUntil);
        }
        if ($this->onlinedSince) {
            $this->onlinedSince = new \DateTime($this->onlinedSince);
        }
    }
}
