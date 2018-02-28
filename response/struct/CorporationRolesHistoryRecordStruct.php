<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 12:06
 */

namespace ESC\response\struct;

class CorporationRolesHistoryRecordStruct extends Struct
{
    public $characterId;
    public $changedAt;
    public $issuerId;
    public $roleType;
    public $oldRoles;
    public $newRoles;

    public function __construct($data)
    {
        parent::__construct($data);
        $this->changedAt = new \DateTime($this->changedAt);
    }
}
