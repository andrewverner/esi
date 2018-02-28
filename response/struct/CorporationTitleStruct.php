<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 28.02.18
 * Time: 16:37
 */

namespace ESC\response\struct;

use ESC\request\Request;

class CorporationTitleStruct extends Request
{
    public $titleId;
    public $name;
    public $roles;
    public $grantableRoles;
    public $rolesAtHq;
    public $grantableRolesAtHq;
    public $rolesAtBase;
    public $grantableRolesAtBase;
    public $rolesAtOther;
    public $grantableRolesAtOther;
}
