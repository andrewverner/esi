<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 12:01
 */

namespace ESC\response\struct;

class CorporationRoleStruct extends Struct
{
    public $characterId;
    public $roles;
    public $grantableRoles;
    public $rolesAtHq;
    public $grantableRolesAtHq;
    public $rolesAtBase;
    public $grantableRolesAtBase;
    public $rolesAtOther;
    public $grantableRolesAtOther;
}
