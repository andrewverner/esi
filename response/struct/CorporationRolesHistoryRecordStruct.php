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

    protected $dateTimeProps = ['changedAt'];
}
